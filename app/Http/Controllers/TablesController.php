<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table;

class TablesController extends Controller
{
    /**
     * Table variable
     * 
     * @var Table
     */

    public $table;

    /**
     * Tables Controller constructor.
     *
     * @param Table $table this is the table variable
     */
    public function __construct(Table $table)
    {
        $this->table = $table;
    }


    /**
     * Display a listing of students
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
            $tables = Table::all()->toArray();
            //dd($tables);    
             

            $filter = "free";

            $new_array = array_filter($tables, function($var) use ($filter)  {
                return ($var['status'] == $filter);
            });

            dd($new_array);

            
            $min = PHP_INT_MAX;
            foreach($new_array as $value) { 
            if($value['size'] < $min) {
                $tables_ids = $value['id'];
                $min = $value['size'];
            }

            dd($tables_ids);

            // result table_ids
            // search for size
            
           
            $persons = 10;
  
            switch ($persons) {
                case $persons == 10;
                
                $big = array_search('8', array_column($new_array, 'size'));
                $small = array_search('2', array_column($new_array, 'size'));
                echo $big;
                echo $small;

                $tables_ids = [];
                array_push($tables_ids, $big, $small);
                    
            break;
                
                case $persons == 9;
                    # code...
                    break;

                case $persons == 8;
                    # code...
                    break;
                
                case $persons == 7;
                    # code...
                    break;
                
                case $persons == 6;
                    # code...
                    break;
                
                case $persons == 5;
                    # code...
                    break;   

                case $persons == 4;
                    # code...
                    break;    
                
                case $persons == 3;
                    # code...
                    break;    
                
                case $persons == 2;
                    # code...
                    break;    
               
                case $persons == 1;
                    # code...
                    break;    
            }

        //return view('tables.index', ['tables' => $tables]);
   
    }
    }
}
    


