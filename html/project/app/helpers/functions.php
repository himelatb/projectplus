<?php

function users(){
   return \App\Models\User::get();
}

function userFirst(){
   return \App\Models\User::first();
}

function userCount(){
   return \App\Models\User::count();
}

function authUser(){
   return auth()->user();
}

function prd($arr)
{
  echo "<pre>";
  print_r($arr);
  die;
}
