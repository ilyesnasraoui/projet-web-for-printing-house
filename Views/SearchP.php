<?php
include_once "../config.php";
include "../core/ProduitC.php";
$f=new ProduitC();

if(isset($_GET['ID_Cat']))
{
  if(isset($_GET['kword']))
  {
    $p=$f->afficherProduits_Cat_kword($_GET['ID_Cat'],$_GET['kword']);
  }
  else
    $p=$f->afficherProduits_Cat($_GET['ID_Cat']);
}


else
{
  if(isset($_GET['kword']))
  {
    $p=$f->afficherProduits_kword($_GET['kword']);
  }
  else
    $p=$f->afficherProduits();
}
?>
<div class="latest_product_inner" id="DATA">
                        <?php
                            foreach ($p as $t)
                            {

                              echo '
                        <div class="row">
                          
                              <div class="card-body">
                                <h4 class="card-product__title"> <h4>'.$t["nom"].'</h4></h4>
                                
                                <div class="col-md-6 col-lg-6">
                            <div class="card text-center card-product">
                              <div class="card-product__img">
                              <a href="single-product.php?ID='.$t["id_produit"].'">
                                <img class="card-img" src="../Backend/production/views/'.$t["image"].'" alt="product img"></a>
                                <p class="card-product__price">'.$t["prix"].' DT</p>
                                
                                <form style="display: inline-block;"  method="post" action="..\Backend\production\views\forms.php">
                                                   <input type="hidden" name="pId" value="'.$t["id_produit"].'" >
                                                    <input type="hidden" name="form" value="addCart" >
                                                    <ul class="card-product__imgOverlay">
                                                      <li><button><i class="ti-search"></i></button></li>
                                                      <li><button><i class="ti-shopping-cart"></i></button></li>
                                                      <li><button><i class="ti-heart"></i></button></li>
                                                    </ul>
                                            </form>
                              </div>
                            </div>
                          </div>
                              </div>
                              
                          
                              


                        </div>';
                            }
                           ?>
                    </div>