<?php

namespace masterplan1\Parser;

interface ParserInterface{
    
    public function process(  string $url, string $tag): array;
}