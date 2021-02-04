@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="content">
                        <div class="row">
                           <div class="col-lg-12">         
                              <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
                                 <div class="container-fluid">
                                 <div class="header-body">
                                  <!-- Card stats -->
                                     <div class="row">        
                                       <div class="col-xl-3 col-lg-6">
                                          <div class="card card-stats mb-4 mb-xl-0">
                                              <div class="card-body">
                                                  <div class="row">
                                                      <div class="col">
                                                          <h5 class="card-title text-uppercase text-muted mb-0">Total Users</h5>
                                                          <?php
                      
                                                          $count = DB::table('users')->count();
                      
                                                          echo '<span class="h2 font-weight-bold mb-0">' .$count. '</span>'
                             
                                                          ?>
                                                      </div>
                                                      <div class="col-auto">
                                                          <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                              <i class="fa-fw fas fa-users"></i>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                       <div class="col-xl-3 col-lg-6">
                                          <div class="card card-stats mb-4 mb-xl-0">
                                              <div class="card-body">
                                                  <div class="row">
                                                      <div class="col">
                                                          <h5 class="card-title text-uppercase text-muted mb-0">Total Teams</h5>
                                                          <?php
                      
                                                          $count = DB::table('teams')->count();
                      
                                                          echo '<span class="h2 font-weight-bold mb-0">' .$count. '</span>'
                             
                                                          ?>
                                                      </div>
                                                      <div class="col-auto">
                                                          <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                              <i class="fa-fw fas fa-users"></i>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="col-xl-3 col-lg-6">
                                        <div class="card card-stats mb-4 mb-xl-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Games</h5>
                                                        <?php
                    
                                                        $count = DB::table('games')->count();
                    
                                                        echo '<span class="h2 font-weight-bold mb-0">' .$count. '</span>'
                           
                                                        ?>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                            <i class="fa-fw fas fa-futbol"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                                  
                              </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection