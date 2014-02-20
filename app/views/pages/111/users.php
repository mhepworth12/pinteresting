<?php 
include 'templates/header.php';

 if(!$user->isAdmin())
    header("Location: index.php");
 ?>

    
        <!-- Left nav
        ================================================== -->
        <div class="row">        
          <div class="span12 well">
              <br/>
              <ul class="nav nav-tabs" id="nav-contracts">
                <li class="active"><a href="#models" data-toggle="tab">Models</a></li>
                <li><a href="#clients" data-toggle="tab">Clients</a></li>
              </ul>    
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="models">
                      <h3 class="text-success">Approved Models</h3>
                      <table class="table table-striped table-hover users-table model-table">
                          <thead>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Height</th>
                              <th>Bust</th>
                              <th>Register Date</th>
                              <th>Last Login</th>
                              <th>Status</th>
                          </thead>
                          <?php
                          $newModel = new ASModel("",$dynamoDB_client);
                          $models = $newModel->getModels();
                          ?>
                      <?php foreach ($models as $model): ?>
                          <tr class="user-row">
                                <?php if($model['approved'] == "Y"): ?> 
                                    <td><?php echo htmlentities($model['first_name'])." ".htmlentities($model['last_name']); ?></td>                        
                                    <td><?php echo htmlentities($model['email']); ?></td>
                                    <td><?php echo htmlentities($model['height']); ?></td>
                                    <td><?php echo htmlentities($model['bust']); ?></td>
                                    <td><?php echo $model['register_date']; ?></td>
                                    <td><?php echo $model['login_date']; ?></td>
                                    <td> <p class='text-success'>Approved</p></td>

                                <?php endif;?>                            
                          </tr>
                      <?php endforeach; ?>           
                      </table>   
                      <h3 class="text-warning">Pending Models</h3>
                        <table class="table table-striped table-hover users-table model-table">
                          <thead>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Height</th>
                              <th>Bust</th>
                              <th>Register Date</th>
                              <th>Last Login</th>
                              <th>Status</th>
                          </thead>
                          <?php
                          //$newModel = new ASModel("");
                          //$models = $newModel->getModels();
                          ?>
                      <?php foreach ($models as $model): ?>
                          <tr class="user-row">
                                <?php if($model['approved'] == "P"): ?> 
                                    <td><?php echo htmlentities($model['first_name'])." ".htmlentities($model['last_name']); ?></td>                        
                                    <td><?php echo htmlentities($model['email']); ?></td>
                                    <td><?php echo htmlentities($model['height']); ?></td>
                                    <td><?php echo htmlentities($model['bust']); ?></td>
                                    <td><?php echo $model['register_date']; ?></td>
                                    <td><?php echo $model['login_date']; ?></td>
                                    <td> <p class='text-warning'>Pending</p></td>

                                <?php endif;?>                            
                          </tr>
                      <?php endforeach; ?>           
                      </table>   

                      <h3 class="text-danger">Rejected Models</h3>
                        <table class="table table-striped table-hover users-table model-table">
                          <thead>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Height</th>
                              <th>Bust</th>
                              <th>Register Date</th>
                              <th>Last Login</th>
                              <th>Status</th>
                          </thead>
                          <?php
                          //$newModel = new ASModel("");
                          //$models = $newModel->getModels();
                          ?>
                      <?php foreach ($models as $model): ?>
                          <tr class="user-row">
                                <?php if($model['approved'] == "R"): ?> 
                                    <td><?php echo htmlentities($model['first_name'])." ".htmlentities($model['last_name']); ?></td>                        
                                    <td><?php echo htmlentities($model['email']); ?></td>
                                    <td><?php echo htmlentities($model['height']); ?></td>
                                    <td><?php echo htmlentities($model['bust']); ?></td>
                                    <td><?php echo $model['register_date']; ?></td>
                                    <td><?php echo $model['login_date']; ?></td>
                                    <td> <p class='text-danger'>Rejected</p></td>

                                <?php endif;?>                            
                          </tr>
                      <?php endforeach; ?>           
                      </table>   

                  </div
            </div>
            <div class="tab-pane fade" id="clients">
                      <h3 class="text-success">Approved Clients</h3>
                      <table class="table table-striped table-hover users-table client-table">
                          <thead>
                              <th>Company</th>
                              <th>Email</th>
                              <th>Register Date</th>
                              <th>Last Login</th>
                              <th>Status</th>
                          </thead>
                          <?php
                          $newClient=new ASClient("",$dynamoDB_client);
                          $clients=$newClient->getClients();
                          ?>
                      <?php foreach ($clients as $client): ?>
                          <tr class="user-row">
                                <?php if($client['approved'] == "Y"): ?> 
                                    <td><?php echo htmlentities($client['company']); ?></td>                        
                                    <td><?php echo htmlentities($client['email']); ?></td>
                                    <td><?php echo $client['register_date']; ?></td>
                                    <td><?php echo $client['login_date']; ?></td>
                                    <td> <p class='text-success'>Approved</p></td>

                                <?php endif;?>                            
                          </tr>
                      <?php endforeach; ?>           
                      </table>   
                      <h3 class="text-danger">Rejected Clients</h3>
                          <table class="table table-striped table-hover users-table client-table">
                          <thead>
                              <th>Company</th>
                              <th>Email</th>
                              <th>Register Date</th>
                              <th>Last Login</th>
                              <th>Status</th>
                          </thead>
                          <?php
                          //$newClient=new ASClient("");
                          //$clients=$newClient->getClients();
                          ?>
                      <?php foreach ($clients as $client): ?>
                          <tr class="user-row">
                                <?php if($client['approved'] == "R"): ?> 
                                    <td><?php echo htmlentities($client['company']); ?></td>                        
                                    <td><?php echo htmlentities($client['email']); ?></td>
                                    <td><?php echo $client['register_date']; ?></td>
                                    <td><?php echo $client['login_date']; ?></td>
                                    <td> <p class='text-danger'>Rejected</p></td>
                                <?php endif;?>                            
                          </tr>
                      <?php endforeach; ?>           
                      </table>   
                  </div
            </div>
        </div>
        </div>
    
    <?php include 'templates/footer.php'; ?>                                
        <script src="ASLibrary/js/users.js" type="text/javascript" charset="utf-8"></script>
        <script src="ASLibrary/js/index.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>
