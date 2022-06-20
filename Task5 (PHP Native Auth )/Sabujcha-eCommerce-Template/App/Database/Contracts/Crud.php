<?php

namespace App\Database\Contracts;


interface Crud{
    function create();
    function read();
    function update();
    function delete();
}