<?php
  include 'wa_wrapper/WolframAlphaEngine.php';

 
  

  if($_POST){
				
  $appID = '6HGT3T-TLLQQEJH37';
  
 

  // instantiate an engine object with your app id
  $engine = new WolframAlphaEngine( $appID );

  // we will construct a basic query to the api with the input 'pi'
  // only the bare minimum will be used
  $response = $engine->getResults( $_POST['q']);

  // getResults will send back a WAResponse object
  // this object has a parsed version of the wolfram alpha response
  // as well as the raw xml ($response->rawXML) 
  
  // we can check if there was an error from the response object
  if ( $response->isError() ) {
?>
  <h1>There was an error in the request</h1>
  
<?php
    die();
  }
?>


<br>

<?php
  // if there are any assumptions, display them 
  if ( count($response->getAssumptions()) > 0 ) {
?>
    <h2>Nos Suppositions :</h2>
    <ul>
<?php
      // assumptions come as a hash of type as key and array of assumptions as value
      foreach ( $response->getAssumptions() as $type => $assumptions ) {
?>
        <li>
          <ol>
<?php
          foreach ( $assumptions as $assumption ) {
?>
            <li><a href="index.php?q=<?php echo urlencode($_REQUEST['q']);?>&assumption=<?php echo $assumption->input;?>"><?php echo $assumption->description;?></a></li>
<?php
          }
?>
          </ol>
        </li>
<?php
      }
?>
      
    </ul>
<?php
  }
?>

<hr>

<?php
  // if there are any pods, display them
  if ( count($response->getPods()) > 0 ) {
?>
    <h2>Vos informations :</h2>
    <table border=1 width="80%" align="center">
<?php
    foreach ( $response->getPods() as $pod ) {
?>
      <tr>
        <td>
          <h3><?php echo $pod->attributes['title']; ?></h3>
<?php
        // each pod can contain multiple sub pods but must have at least one
        foreach ( $pod->getSubpods() as $subpod ) {       //var_dump($subpod->plaintext);
          // if format is an image, the subpod will contain a WAImage object
?>
          <img src="<?php echo $subpod->image->attributes['src']; ?>">
          <hr>
<?php
        }
?>
          
        </td>
      </tr>
<?php
    }
?>
    </table>
<?php
  }}
?>


