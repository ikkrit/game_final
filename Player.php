<?php

    class Player
    {
        private $id_player;
        private $name;
        private $pseudo;
        private $class;
        private $created_at;
        private $party;

        public function __construct(string $name,string $pseudo,int $class)
        {
            $this->name = $name;
            $this->pseudo = $pseudo;

            if($class > 0 && $class <= 5) {
                $this->setClass($class);
            } else {
                exit("Tu sais pas lire ??");
            }

            $this->created_at = date("h:i:sa");
        }


        public function getId_player()
        {
                return $this->id_player;
        }

        public function setId_player($id_player)
        {
                $this->id_player = $id_player;

                return $this;
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

        public function getPseudo()
        {
                return $this->pseudo;
        }

        public function setPseudo($pseudo)
        {
                $this->pseudo = $pseudo;

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
                            $this->class = PLAYER_CHOICE_CLASS_01;
                            break;
                        case 2:
                            $this->class = PLAYER_CHOICE_CLASS_02;
                            break;
                        case 3:
                            $this->class = PLAYER_CHOICE_CLASS_03;
                            break;
                        case 4:
                            $this->class = PLAYER_CHOICE_CLASS_04;
                            break;
                        case 5:
                            $this->class = PLAYER_CHOICE_CLASS_05;
                            break;
                        default:
                            $this->class = PLAYER_CHOICE_CLASS_ERROR;
                }
                return $this;
        }

        public function getCreated_at()
        {
                return $this->created_at;
        }

        public function setCreated_at($created_at)
        {
                $this->created_at = $created_at;

                return $this;
        }

        public function getParty()
        {
                return $this->party;
        }

        public function setParty($party)
        {
                $this->party = $party;

                return $this;
        }
     }
        
?>