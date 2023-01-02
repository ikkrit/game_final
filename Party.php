<?php

    class Party
    {
        private $id_party;
        private $created_at;
        private $score;
        private $id_player;

        
        public function getId_party()
        {
                return $this->id_party;
        }

        public function setId_party($id_party)
        {
                $this->id_party = $id_party;

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

        public function getScore()
        {
                return $this->score;
        }

        public function setScore($score)
        {
                $this->score = $score;

                return $this;
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
    }

?>