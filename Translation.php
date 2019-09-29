<?php
/*

 */

class Translation extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Translation_model');
         $this->load->model('Lang_cat_model');
    }
    /*

    */
    
/*
     * applychanges to language file
     */
    function applychanges( )
    {

        // echo  $trans_project_id."<<";
        $langstr_en="<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                /**
                *
                */"."\n";
        $langstr_ar="<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                /**
                *
                */"."\n";
        $lang_cat = $this->Lang_cat_model->get_all_lang_cat();
        $translation = $this->Translation_model->get_all_translation();
        $aa=array();
        foreach($lang_cat as $m)
        {
              $langstr_en.= "/*  ".$m['category_name']." */"."\n";
                $langstr_ar.= "/* ".$m['category_name']." */"."\n";
                $m['translation'] = $this->Translation_model->get_all_translationbycatid($m['lang_cat_id']);
                if( $m['translation']!=null)
                {
                    foreach( $m['translation'] as $mt)
                    {
                         $langstr_en.= "\$lang['".$mt['title']."'] = \"".$mt['english']."\";"."\n";
                          $langstr_ar.= "\$lang['".$mt['title']."'] = \"".$mt['arabic']."\";"."\n";
                    }
                }
                $langstr_en.= "/*  *** */"."\n";
                $langstr_ar.= "/* *** */"."\n";
                $aa[]=$m;
        }
        write_file('./application/language/'.LANG_FOLDERNAME_EN.'/keyword_lang.php', $langstr_en);
         write_file('./application/language/'.LANG_FOLDERNAME_AR.'/keyword_lang.php', $langstr_ar);

         redirect($_SERVER['HTTP_REFERER']);
    }
  }
