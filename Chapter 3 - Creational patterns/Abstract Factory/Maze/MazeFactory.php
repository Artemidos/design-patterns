<?php

    namespace DesignPatterns\CreationalPatterns\AbstractFactory;

    use \Exception;

    class MazeFactory
    {
        protected array $partCatalog = [];

        public function addPart(string $name, string $className): self
        {
            $this->partCatalog[$name] = $className;
            return $this;
        }

        /**
         * @throws Exception
         */
        public function make(string $partName)
        {
            if (!isset($this->partCatalog[$partName])) {
                throw new Exception("Unknown part: $partName");
            }

            $className = $this->partCatalog[$partName];
            return new $className();
        }
    }
