<?php

declare(strict_types = 1);

namespace BodnariucUser;

/**
 * @autor Lukas Bodnariuc
 */
class UserLukasBodnariuc{

    // uchovava informaci FALSE/TRUE o povyseni
    private $promotionLukasBodnariuc;
    // poznamka k uzivateli
    private $noteLukasBodnariuc;

    // plat uzivatele
    protected $salaryLukasBodnariuc;
    // projekt na kterem uzivatel pracuje
    protected $projectLukasBodnariuc;
    // email uzivatele
    protected $emailLukasBodnariuc;

    public $nameLukasBodnariuc = "Lukas";
    public $surnameLukasBodnariuc = "Bodnariuc";
    public $ageLukasBodnariuc = 19;
    public $sexLukasBodnariuc = "male";
    public $positionLukasBodnariuc = "Noob programator";

    public function __construct(){

    }
    
    /**
     * nastavi hodnotu PromotionUserLukasBodnariuc
     * @param bool $value
     */
    public function setPromotionUserLukasBodnariuc(bool $value){
        $this->promotionLukasBodnariuc = $value;
    }
    
    /**
     * nastavi hodnotu NoteLukasBodnariuc
     * @param string $value
     */
    public function setNoteLukasBodnariuc(string $value){
        $this->noteLukasBodnariuc = $value;
    }
    
    /**
     * vrati hodnotu jmena a prijmeni
     * @return string
     */
    public function getNameLukasBodnariuc(): string{
        return $this->nameLukasBodnariuc . " " . $this->surnameLukasBodnariuc;
    }
    
    /**
     * vrati hodnotu AgeLukasBodnariuc
     * @return string
     */
    public function getAgeLukasBodnariuc(): string{
        return "Uživatel ". $this->nameLukasBodnariuc . " má " . $this->ageLukasBodnariuc . " roků";
    }
    
    /**
     * vrati hodnotu SexLukasBodnariuc
     * @return string
     */
    public function getSexLukasBodnariuc(): string{
        return $this->sexLukasBodnariuc == "male" ? "Muž" : "Žena"; 
    }
    
    /**
     * vrati hodnotu PositionLukasBodnariuc
     * @return string
     */
    public function getPositionLukasBodnariuc(): string{
        return $this->positionLukasBodnariuc;
    }

}

?>