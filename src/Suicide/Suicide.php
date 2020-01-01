<?php
namespace BNI;

class Suicide {
    public static $directory;
    static $timeToDie = 0; // in seconds
    static $dateToDie = '';
	
	public function SetDirectory($location) {
		self::$directory = $location;
        return new Suicide;
    }
    public function WriteLastNote($toWrite) {
        $path = self::$directory.'/last_note.txt';
        $note = fopen(self::$directory.'/last_note.txt', 'w');
        $note = fopen('../../toDel/last_note.txt', 'w');
        $note = fopen($path, 'w');
        fwrite($note, $toWrite);
        fclose($note);
        return new Suicide;
    }
    public function createTimer($props) {
        $toWrite = 'echo "Deleting... (updated)" & sleep '.$props['time'].'; find '.$props['directory'].' ! -name last_note.txt -delete';
        $file = fopen('./GrimReaper.sh', 'w');
        fwrite($file, $toWrite);
        fclose($file);
        echo "<pre>";
        $setChmod = shell_exec('chmod +x ./GrimReaper.sh');
        echo "Chmod setted ".$setChmod."<br />";
        $run = shell_exec('./GrimReaper.sh');
        echo $run."</pre>";
    }
    public function GoodBye() {
        $this->createTimer([
            'time' => self::$timeToDie,
            'directory' => self::$directory,
        ]);
    }
    public function UseGunToHead($gunType) {
        if($gunType == "shotgun") {
            self::$timeToDie = 6;
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
