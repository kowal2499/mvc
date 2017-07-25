<?php
    class FilteredMap {
        
        private $map;
        
        public function __construct(array $baseMap) {
            $this->map = $baseMap;
        }

        public function has($name) {
            return isset($this->map[$name]);
        }

        public function get($name) {
            return $this->map[$name] ?? null;
        }

        public function getInt($name) {
            return (int) $this->get($name);
        }

        public function getNumber($name) {
            return (float) $this->get($name);
        }

        public function getString($name, $filter = true) {
            $value = (string) $this->get($name);
            return $filter ? addslashes($value) : $value;
        }

    }