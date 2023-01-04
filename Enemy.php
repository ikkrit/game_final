<?php

    class Enemy
    {
        private $name;
        private $class;
        private $attack;
        private $skills;
        private $zone;

        public function __construct(int $select)
        {
            if($select > 0 && $select <= 6) {
                $this->setName($select);
                $this->setClass($select);
                $this->setAttack($select);
                $this->setSkills($select);
                $this->setZone($select);
            } else {
                exit("Entre 1 et 6");
            }
        }


        public function getName()
        {
                return $this->name;
        }

        public function setName($name)
        {
                switch($name) {
                    case 1:
                        $this->name = "Varu";
                        break;
                    case 2:
                        $this->name = "Seko";
                        break;
                    case 3:
                        $this->name = "Elder";
                        break;
                    case 4:
                        $this->name = "Cyber";
                        break;
                    case 5:
                        $this->name = "Red";
                        break;
                    case 6:
                        $this->name = "Horizon";
                        break;
                    default:
                        $this->name = "Inconnu";
                }
                return $this;
        }

        public function getClass()
        {
                return $this->class;
        }

        public function setClass($class)
        {
            switch($class) {
                case 1:
                    $this->class = "Necro";
                    break;
                case 2:
                    $this->class = "Baro";
                    break;
                case 3:
                    $this->class = "Delgo";
                    break;
                case 4:
                    $this->class = "Kilgo";
                    break;
                case 5:
                    $this->class = "Ieo";
                    break;
                case 6:
                    $this->class = "Varado";
                    break;
                default:
                    $this->class = "Inconnu";
            }
            return $this;
        }

        public function getAttack()
        {
                return $this->attack;
        }

        public function setAttack($attack)
        {
            switch($attack) {
                case 1:
                    $this->attack = 100;
                    break;
                case 2:
                    $this->attack = 120;
                    break;
                case 3:
                    $this->attack = 100;
                    break;
                case 4:
                    $this->attack = 120;
                    break;
                case 5:
                    $this->attack = 150;
                    break;
                case 6:
                    $this->attack = 100;
                    break;
                default:
                    $this->attack = 0;
            }
            return $this;
        }

        public function getSkills()
        {
                return $this->skills;
        }

        public function setSkills($skills)
        {
            switch($skills) {
                case 1:
                    $this->skills = "Fire";
                    break;
                case 2:
                    $this->skills = "Ice";
                    break;
                case 3:
                    $this->skills = "Dendro";
                    break;
                case 4:
                    $this->skills = "Hydro";
                    break;
                case 5:
                    $this->skills = "Fire";
                    break;
                case 6:
                    $this->skills = "Ice";
                    break;
                default:
                    $this->skills = "Inconnu";
            }
            return $this;
        }

        public function getZone()
        {
                return $this->zone;
        }

        public function setZone($zone)
        {
            switch($zone) {
                case 1:
                    $this->zone = "Mondstat";
                    break;
                case 2:
                    $this->zone = "Liyé";
                    break;
                case 3:
                    $this->zone = "Sumeru";
                    break;
                case 4:
                    $this->zone = "Icemery";
                    break;
                case 5:
                    $this->zone = "Fontaine";
                    break;
                case 6:
                    $this->zone = "Susuma";
                    break;
                default:
                    $this->zone = "Inconnu";
            }
            return $this;
        }

        public function enemy_description()
        {
            return "{$this->getName()} de la class : {$this->getClass()} avec une attaque de : {$this->getAttack()} de type {$this->getSkills()} qui appartient à la zone : {$this->getZone()}";
        }
    }

?>