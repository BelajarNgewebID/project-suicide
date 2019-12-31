<?php
namespace BNI;

set_time_limit(3);
ini_set('max_execution_time', 3);
if(ini_get('safe_mode')) {
    die('is on');
}

class Suicide {
    static $directory;
    static $timeToDie = 0; // in seconds
    static $dateToDie = '';
	
	public function setDirectory($location) {
		self::$directory = $location;
        return new Suicide;
	}
	public function execute() {
        $dir = $this->directory;
		if(is_dir($dir)) {
            $objects = scandir($dir);
            foreach($objects as $obj) {
                if($obj != "." && $obj != "..") {
                    if(filetype($dir."/".$obj) == "dir") {
                        rmdir($dir."/".$obj);
                    }else {
                        unlink($dir."/".$obj);
                    }
                }
            }
            reset($objects);
            rmdir($dir);
        }
    }
    public function createTimer($props) {
        $toWriteOld = 'input='.$props['time'].'
tic=`date +%S`
elap_time=0

while [ "$elap_time" -le "$input" ]; do

toc=`date +%S`
elap_time=`expr $toc - $tic`
done

rm -rf '.$props['directory'];
        $toWrite = 'echo "Deleting... (updated)" & sleep '.$props['time'].'; rm -rf '.$props['directory'];
        $file = fopen('./cron.sh', 'w');
        fwrite($file, $toWrite);
        fclose($file);
        echo "<pre>";
        $setChmod = shell_exec('chmod +x ./cron.sh');
        echo "Chmod setted ".$setChmod."<br />";
        $run = shell_exec('./cron.sh');
        echo $run."</pre>";
    }
    public function eksekusi() {
        $this->createTimer([
            'time' => self::$timeToDie,
            'directory' => self::$directory,
        ]);
        echo "Deleting ".self::$directory."...";
    }
    public function UseGunToHead($gunType) {
        if($gunType == "shotgun") {
            self::$timeToDie = 102;
        }else if($gunType == "handgun") {
            self::$timeToDie = 150;
        }
        return new Suicide;
    }
    public function BurnIntoFire() {
        self::$timeToDie = 3420;
        return new Suicide;
    }
    public function ConsumeCyanide() {
        self::$timeToDie = 108;
        return new Suicide;
    }
    public function CutThroat() {
        self::$timeToDie = 930;
        return new Suicide;
    }
    public function Drowning() {
        self::$timeToDie = 930;
        return new Suicide;
    }
    public function HitBy($stuff) {
        if($stuff != "train") {
            self::$timeToDie = 1140;
        }else {
            self::$timeToDie = 108;
        }
    }
    public function Hanging() {
        self::$timeToDie = 210;
    }
    public function JumpFromHeight() {
        self::$timeToDie = 274;
    }
}

$app = new Suicide();
echo $app->setDirectory('~/laravel/plugins/suicide/toDel')
    ->UseGunToHead('shotgun')
    ->eksekusi();
