<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
        <a href="inicio"><img src="vistas/assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon"></a>
        </div>
        <div>
        <a href="inicio"> <h4 class="logo-text">Retos Energeticos</h4></a>
        </div>
        <div class="toggle-icon ms-auto">
          <ion-icon name="menu-sharp"></ion-icon>
        </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
       
        <?php
        if($_SESSION["rol"]== "Administrador" ){
          echo'<li class="menu-label">Elementos</li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon">
                <ion-icon name="briefcase-sharp"></ion-icon>
              </div>
              <div class="menu-title">Herramientas</div>
            </a>
  
            <ul>
              <!-- <li> <a href="inicio">
                  <ion-icon name="ellipse-outline"></ion-icon>Inicio
                </a>
              </li> -->
              <li> <a href="usuarios">
                  <ion-icon name="ellipse-outline"></ion-icon>Usuarios
                </a>
              </li>
  
              <li> <a href="proveedores">
                  <ion-icon name="ellipse-outline"></ion-icon>Proveedores
                </a>
              </li>
              
              
              
            </ul>
            
          </li>
          
          <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="server-sharp"></ion-icon>
            </div>
            <div class="menu-title">Compras</div>
          </a>
          <ul>
            <li> <a href="solicitud-compras">
                <ion-icon name="ellipse-outline"></ion-icon>Solicitud de compra
              </a>
            </li>

            <li> <a href="orden-compras">
                <ion-icon name="ellipse-outline"></ion-icon>Orden de compra
              </a>
            </li>
            
            
            <li> <a href="manager">
                <ion-icon name="ellipse-outline"></ion-icon>Manager
              </a>
            </li>
          </ul>
        </li>

        <li class="menu-label">Paginas</li>

        </li>
        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="map-sharp"></ion-icon>
            </div>
            <div class="menu-title">------</div>
          </a>
          <ul>
            <li> <a href="map-google-maps.html">
                <ion-icon name="ellipse-outline"></ion-icon>-----
              </a>
            </li>
            <li> <a href="map-vector-maps.html">
                <ion-icon name="ellipse-outline"></ion-icon>-----
              </a>
            </li>
          </ul>
        </li>
          ';


        }
        if($_SESSION["rol"] == "Manager"){
          echo'
              
          <li class="menu-label">Elementos</li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon">
                <ion-icon name="briefcase-sharp"></ion-icon>
              </div>
              <div class="menu-title">Herramientas</div>
            </a>
  
            <ul>
              <!-- <li> <a href="inicio">
                  <ion-icon name="ellipse-outline"></ion-icon>Inicio
                </a>
              </li> -->
              <li> <a href="usuarios">
                  <ion-icon name="ellipse-outline"></ion-icon>Usuarios
                </a>
              </li>
  
              <li> <a href="proveedores">
                  <ion-icon name="ellipse-outline"></ion-icon>Proveedores
                </a>
              </li>
              
              
              
            </ul>
          
            
          </li> 
          
          <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="server-sharp"></ion-icon>
            </div>
            <div class="menu-title">Compras</div>
          </a>
          <ul>

          <li> <a href="solicitud-compras">
          <ion-icon name="ellipse-outline"></ion-icon>Solicitud de compra
        </a>
      </li>
            
            <li> <a href="orden-compras">
                <ion-icon name="ellipse-outline"></ion-icon>Orden de compra
              </a>
            </li>
            
            
            <li> <a href="manager">
                <ion-icon name="ellipse-outline"></ion-icon>Manager
              </a>
            </li>
          </ul>
        </li>

       

        </li>
       
          ';
        }
        if($_SESSION["rol"] == "Compras"){
          echo'

          <li class="menu-label">Elementos</li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon">
                <ion-icon name="briefcase-sharp"></ion-icon>
              </div>
              <div class="menu-title">Herramientas</div>
            </a>
  
            <ul>
              
  
              <li> <a href="proveedores">
                  <ion-icon name="ellipse-outline"></ion-icon>Proveedores
                </a>
              </li>
              
              
              
            </ul>
            
          </li>
              
              
          
            
          </li>
          
          <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="server-sharp"></ion-icon>
            </div>
            <div class="menu-title">Compras</div>
          </a>
          <ul>

          <li> <a href="solicitud-compras">
          <ion-icon name="ellipse-outline"></ion-icon>Solicitud de compra
        </a>
      </li>
            
            <li> <a href="orden-compras">
                <ion-icon name="ellipse-outline"></ion-icon>Orden de compra
              </a>
            </li>
            
            
            
          </ul>
        </li>

       

        </li>
       
          ';
        }

        if($_SESSION["rol"] == "Empleado"){
          echo'
              
              
          
            
          </li>
          
          <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="server-sharp"></ion-icon>
            </div>
            <div class="menu-title">Compras</div>
          </a>
          <ul>
          <li> <a href="solicitud-compras">
          <ion-icon name="ellipse-outline"></ion-icon>Solicitud de compra
        </a>
      </li>
            
            <li> <a href="orden-compras">
                <ion-icon name="ellipse-outline"></ion-icon>Orden de compra
              </a>
            </li>
            
            
            
          </ul>
        </li>

       

        </li>
       
          ';
        }

        if($_SESSION["rol"] == "Director"){
          echo'<li class="menu-label">Elementos</li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon">
                <ion-icon name="briefcase-sharp"></ion-icon>
              </div>
              <div class="menu-title">Herramientas</div>
            </a>
  
            <ul>
              <!-- <li> <a href="inicio">
                  <ion-icon name="ellipse-outline"></ion-icon>Inicio
                </a>
              </li> -->
              <li> <a href="usuarios">
                  <ion-icon name="ellipse-outline"></ion-icon>Usuarios
                </a>
              </li>
  
              <li> <a href="proveedores">
                  <ion-icon name="ellipse-outline"></ion-icon>Proveedores
                </a>
              </li>
              
              
              
            </ul>
            
          </li>
          
          <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="server-sharp"></ion-icon>
            </div>
            <div class="menu-title">Compras</div>
          </a>
          <ul>
            <li> <a href="solicitud-compras">
                <ion-icon name="ellipse-outline"></ion-icon>Solicitud de compra
              </a>
            </li>

            <li> <a href="orden-compras">
                <ion-icon name="ellipse-outline"></ion-icon>Orden de compra
              </a>
            </li>
            
            
            <li> <a href="manager">
                <ion-icon name="ellipse-outline"></ion-icon>Manager
              </a>
            </li>
          </ul>
        </li>

        <li class="menu-label">Paginas</li>

        </li>
        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="map-sharp"></ion-icon>
            </div>
            <div class="menu-title">------</div>
          </a>
          <ul>
            <li> <a href="map-google-maps.html">
                <ion-icon name="ellipse-outline"></ion-icon>-----
              </a>
            </li>
            <li> <a href="map-vector-maps.html">
                <ion-icon name="ellipse-outline"></ion-icon>-----
              </a>
            </li>
          </ul>
        </li>
          ';
        }


     
        ?>






      </ul>
      <!--end navigation-->
    </aside>
    <!--end sidebar -->