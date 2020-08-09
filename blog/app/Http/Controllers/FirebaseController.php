<?php

namespace App\Http\Controllers;

use Google\Cloud\Firestore\FirestoreClient;
use Illuminate\Http\Request;

use Kreait\Firebase;

use Kreait\Firebase\Factory;

use Kreait\Firebase\ServiceAccount;

use Kreait\Firebase\Database;

use Kreait\Firebase\Firestore;

class FirebaseController extends Controller
{
   protected  $db;
   protected $name;

    public  function __construct(string $collection)
    {
        $this->db = new  FirestoreClient([
            'projectId' => 'medical-profile-assistan-a596b'
        ]);
        $this->name = $collection;

    }
    public function getDocument(String $name){

        return $this->db->collection($this->name)->document($name)->snapshot()->data();
    }

}
