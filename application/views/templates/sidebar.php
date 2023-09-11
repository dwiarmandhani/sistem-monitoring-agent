 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="<?php echo base_url(); ?>" class="brand-link">
     <img src="<?php echo base_url(); ?>assets/adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light"><b>SIMONA</b></span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">
           <a href="<?= base_url(); ?>" class="nav-link active">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url('prospek/prospek/'); ?>" class="nav-link">
             <i class="nav-icon fas fa-table"></i>
             <p>
               Daftar Prospek
               <!-- <i class="fas fa-angle-left right"></i> -->
             </p>
           </a>
           <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul> -->
         </li>
         <li class="nav-item">
           <a href="<?= base_url('agentoperational/agentoperational/'); ?>" class="nav-link">
             <i class="nav-icon fas fa-table"></i>
             <p>
               Daftar Agent Operational
               <!-- <i class="fas fa-angle-left right"></i> -->
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url('survey/survey/'); ?>" class="nav-link">
             <i class="nav-icon fas fa-table"></i>
             <p>
               Daftar Survey
               <!-- <i class="fas fa-angle-left right"></i> -->
             </p>
           </a>
         </li>

         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
             <p>
               Master Data
               <i class="fas fa-angle-left right"></i>
               <!-- <span class="badge badge-info right">6</span> -->
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= base_url('master/masteruseradmin/'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>User Admin</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= base_url('master/masteruseragent/'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>User Agent</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= base_url('master/mastergradeao/'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Grade AO</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= base_url('master/masterindustri/'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Jenis Industri</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= base_url('master/masterproduk/'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Produk Kategori</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= base_url('master/mastercompany/'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Instansi/Perusahaan</p>
               </a>
             </li>
           </ul>
         </li>
         <li>
           <hr class="bg-light border-2 border-top border-light">
         </li>
         <li class="nav-item">
           <a href="<?php echo base_url('login/logout'); ?>" class="nav-link">
             <i class="nav-icon fas fa-sign-out-alt"></i>
             <p>
               logout
               <!-- <i class="fas fa-angle-left right"></i> -->
             </p>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>