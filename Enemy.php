<?php

    class Enemy
    {
        private $name;
        private $class;
        private $attack;
        private $skills;
        private $zone;

        public function __construct($zone)
        {
            $this->zone = $zone;
        }


        public function getName()
        {
                return $this->name;
        }

        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        public function getClass()
        {
                return $this->class;
        }

        public function setClass($class)
        {
                $this->class = $class;

                return $this;
        }

        public function getAttack()
        {
                return $this->attack;
        }

        public function setAttack($attack)
        {
                $this->attack = $attack;

                return $this;
        }

        public function getSkills()
        {
                return $this->skills;
        }

        public function setSkills($skills)
        {
                $this->skills = $skills;

                return $this;
        }

        public function getZone()
        {
                return $this->zone;
        }

        public function setZone($zone)
        {
                $this->zone = $zone;

                return $this;
        }
    }

?>