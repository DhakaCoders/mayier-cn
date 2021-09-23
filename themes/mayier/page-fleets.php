<?php 
/*
Template Name: Our Fleet
*/
get_header(); 
if( isset($_GET['type']) || isset($_GET['satr_date']) || isset($_GET['end_date']) )
  get_template_part('templates/filter', 'results');
else
  get_template_part('templates/fleets', 'sec');
get_footer(); 
?>