<?php

use Google\Cloud\Firestore\FirestoreClient;

require_once 'vendor/autoload.php';


class Firestore
{
    protected  $db;
    protected $name;

    public  function __construct($collection)
    {
        $this->db = new  FirestoreClient([
            'projectId' => 'medical-profile-assistan-a596b'
        ]);
        $this->name = $collection;

    }
    public function getDocument($name){
               try{
                   if ($this->db->collection($this->name)->document($name)->snapshot()->exists()){
                      return $this->db->collection($this->name)->document($name)->snapshot()->data();
                   }else{
                       echo 'there is no data exist ';
                   }
               }catch (Exception $exception){
                   return $exception->getMessage();
               }


    }


    public function getwhere($field,$operator,$value){
      $arr=[];
       $query= $this->db->collection($this->name)->where($field,$operator,$value)->documents();


       if (!empty($query)){
           foreach ($query as $item){
               $arr[]=$item->data();

           }
       }
       return $arr;
    }



    public function newDocuments($name , array $data=[]){
    try {
        $this->db->collection($this->name)->document($name)->create($data);
        return true;
    }catch (Exception $exception){
        return $exception->getMessage();
    }

}


    public function updateDocuments($name , array $data=[]){
        try {
            $this->db->collection($this->name)->document($name)->update($data);
            return true;
        }catch (Exception $exception){
            return $exception->getMessage();
        }

    }

}