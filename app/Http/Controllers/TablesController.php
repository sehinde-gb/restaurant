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
            // Push all available tables in to an array.
            //$tables = Table::all()->toArray();
            //dd($tables);    
            
            /*
            Set up tables array with a list of tables and the properties.
            */

            $tables = [
                ["id" => 1, "size" => 6, "status" => "booked"],
                ["id" => 2, "size" => 4, "status" => "free"],
                ["id" => 3, "size" => 2, "status" => "free"],
                ["id" => 4, "size" => 6, "status" => "free"],
                ["id" => 5, "size" => 2, "status" => "free"],
                ["id" => 6, "size" => 8, "status" => "free"],
                ["id" => 7, "size" => 2, "status" => "booked"],
                ["id" => 8, "size" => 4, "status" => "free"],
                ["id" => 9, "size" => 4, "status" => "free"],
                ["id" => 10, "size" => 12, "status" => "booked"],
                ["id" => 11, "size" => 20, "status" => "free"],
                ["id" => 12, "size" => 12, "status" => "free"],
            ];
            

            // Search through the list of tables and filter through and pluck out the ones that are free.

            $filter = "free";

            // Iterate over the table collection and pluck out the tables that have their status set to free
            $array_free = array_filter($tables, function($var) use ($filter)  {
                return ($var['status'] == $filter);
            });

            /* Using a switch statement to determine the number of persons booked and we return the lowest 
            minimum number of tables available or an empty array if it cannot be booked. */

            $persons = 2;
            

            switch ($persons) {


                case $persons == 10;

                $arr = array_filter($array_free, function($ar) {
                    return ($ar['size'] == 8 || $ar['size'] == 2 && $ar['id'] < 5);
                });
                
                //dd($arr);
                $tables_ids = array_column($arr, 'id');
    
                break;

                case $persons == 9;

                $arr = array_filter($array_free, function($ar) {
                    return (($ar['size'] == 9)  && $ar['id'] < 5);
                });
                
                //dd($arr);
                $tables_ids = array_column($arr, 'id');
    
                break;

                case $persons == 8;

                $arr = array_filter($array_free, function($ar) {
                    return ($ar['size'] == 6 || $ar['size'] == 2 && $ar['id'] < 5);
                });

                //dd($arr);
                $tables_ids = array_column($arr, 'id');

                break;

                case $persons == 7;

                $arr = array_filter($array_free, function($ar) {
                    return (($ar['size'] == 7) && $ar['id'] < 5);
                });

                $tables_ids = array_column($arr, 'id');

                break;

                case $persons == 6;

                $arr = array_filter($array_free, function($ar) {
                    return (($ar['size'] == 4 || $ar['size'] == 2) && $ar['id'] < 5);
                });

                //dd($arr);
                $tables_ids = array_column($arr, 'id');

                break;

                case $persons == 5;

                $arr = array_filter($array_free, function($ar) {
                    return (($ar['size'] == 5) && $ar['id'] < 5);
                });

                $tables_ids = array_column($arr, 'id');
                break;

                case $persons == 4;

                $arr = array_filter($array_free, function($ar) {
                    return (($ar['size'] == 4) && $ar['id'] < 5);
                });

                $tables_ids = array_column($arr, 'id');

                break;

                case $persons == 3;

                $arr = array_filter($array_free, function($ar) {
                    return (($ar['size'] == 3) && $ar['id'] < 5);
                });

                $tables_ids = array_column($arr, 'id');

                break;

                case $persons == 2;

                $arr = array_filter($array_free, function($ar) {
                    return (($ar['size'] == 2) && $ar['id'] < 5);
                });

                $tables_ids = array_column($arr, 'id');
                dd($tables_ids);

                break;

            }


            

            
            
           
            
            

        //return view('tables.index', ['tables' => $tables]);
   
    
    }
}
    


