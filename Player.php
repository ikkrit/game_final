<?php

    class Player
    {
        private $id_player;
        private $name;
        private $pseudo;
        private $created_at;
        private $party;

        public function __construct($name,$pseudo)
        {
            $this->name = $name;
            $this->pseudo = $pseudo;
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