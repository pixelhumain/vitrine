<?php
/**
* DefaultController.php
*
* OneScreenApp for Communecting people
*
* @author: Tristan Goguet <tristan.goguet@gmail.com>
* Date: 14/03/2014
*/
class DefaultController extends Controller {

	const moduleTitle = "Vitrine";
	public $keywords = "";
	public $description = "";
	public static $moduleKey = "sig";

	//tu peux utiliser ceci comm ton menu
	public $sidebar1 = array(

	);

	protected function beforeAction($action){
	    Yii::app()->theme  = "theme-vitrine";
	    if( $_SERVER['SERVER_NAME'] == "127.0.0.1" || $_SERVER['SERVER_NAME'] == "localhost" ){
	      Yii::app()->assetManager->forceCopy = true;
	    }
	    return parent::beforeAction($action);
  	}

	/**
	* List all the latest observations
	* @return [json Map] list
	*/
	public function actionIndex() 
	{
		$this->render( "index" );
	}

	public function actionGetPixelActif() {
    	//début de la requete => scope geographique
    	$where = array(	'geo'  => array( '$exists' => true ),
//     					'geo.latitude' => array('$gt' => floatval($_POST['latMinScope']), '$lt' => floatval($_POST['latMaxScope'])),
// 						'geo.longitude' => array('$gt' => floatval($_POST['lngMinScope']), '$lt' => floatval($_POST['lngMaxScope']))
					  
					  	//version $geoWithin (à conserver en attendant la maj de version de mongo)
					  	/*'geoPosition' =>  array('$geoWithin' => 
									array( '$box' => array(array(floatval($_POST['lngMinScope']), 
															  	 floatval($_POST['latMinScope']) 
															 ),
																
														array(floatval($_POST['lngMaxScope']), 
															  floatval($_POST['latMaxScope']) 
															 ),
												 		),
										)
									),
					  */
					  
					  );
		
		//rajoute les filtres choisi dans le panel (seulement s'il y a au moins 1 filtre selectionné)
		
		if(isset($_POST['types'])) {
			$types = $_POST['types'];
			$users = array();
		} else { 
    		Rest::json( array("result" => "Aucun résultat") );
        	Yii::app()->end();
    	}

    	$fields = array("id" => 1, "name" => 1, "email" => 1, "address" => 1, "geo" => 1);
		foreach ($types as $type) {
			if ($type == "pixelActif" || $type == "projectLeader") {
				$collection = Person::COLLECTION;
				$where['type'] = $type;
			} else if ($type == "association") {
				$collection = Organization::COLLECTION;
				$where['type'] = $type;
			} else if ($type == "commune") {
				$collection = City::COLLECTION;
				$where['communected'] = true;
			} else if ($type == "none" || $type == "all" || $type == "citoyen") {
				$collection = Person::COLLECTION;
				unset($where['type']);
			} else {
				error_log("Unknown type in getPixelActifAction : ".$type);
				Rest::json( array("result" => "Unknown type in getPixelActifAction : ".$type) );
        		Yii::app()->end();
			}
			$currentSearch = PHDB::find($collection, $where, $fields);
			$users = array_merge($users, $currentSearch);
		}
		
        $users["origine"] = "getPixelActif";
    	
    	Rest::json( $users );
        Yii::app()->end();
	}

	public function actionTeam() 
	{
		$params = array();
		if(Yii::app()->request->isAjaxRequest)
			echo $this->renderPartial("equipe" , $params, true);
		else
			$this->render( "equipe" , $params );  
	}

}
