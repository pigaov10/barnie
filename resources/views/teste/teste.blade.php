@extends('layout.default')
@section('content')
    <div class="page-users">
        <!-- Nav tab -->
        <div class="page-tabs">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#ausers" class="br-lblue" data-toggle="tab"><i class="fa fa-user lblue"></i> Users</a></li>
                <li><a href="#addnew" class="br-red" data-toggle="tab"><i class="fa fa-plus red"></i> Add New</a></li>
                <li><a href="#search" class="br-green" data-toggle="tab"><i class="fa fa-search green"></i> Search</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade active in" id="ausers">
                    <!-- Users table -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="active">
                                <th><input type="checkbox"></th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date Joined</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>arska.kram.1990</td>
                                <td>Arska Kumar</td>
                                <td><a href="mailto:arska.kram.1990@gmail.com">arska.kram.1990@gmail.com</a></td>
                                <td>25.2.1990</td>
                                <td>Moderator</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-envelope"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <ul class="pagination pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Add new user -->
                <div class="tab-pane fade" id="addnew">
                    <h4>Add New User</h4>

                    <form class="form-horizontal" role="form">

                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-md-2 control-label">Username</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="username" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-2 control-label">Email</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-2 control-label">Password</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="radio" class="col-md-2 control-label">Sex</label>
                            <div class="col-md-10">
                                <label class="radio-inline">
                                    <input type="radio" id="radio" name="radio" value="male"> Male
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" id="radio" name="radio" value="female"> Female
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dropdown" class="col-md-2 control-label">Country</label>
                            <div class="col-md-10">
                                <select class="form-control">
                                    <option>USA</option>
                                    <option>India</option>
                                    <option>Canada</option>
                                    <option>South Africa</option>
                                    <option>Pakistan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Agree Terms & Conditions
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-info">Add</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="search">

                    <h4>Search Users</h4>
                    <!-- Search users -->
                    <div class="well">
                        <h5>Search</h5>
                        <p>Search users by name, email, phone, etc.,</p>
                        <!-- Search form -->
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Type Something...">
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                        </form>
                    </div>
                    <div class="well">
                        <!-- Advanced search -->
                        <h5>Advanced Search</h5>
                        <p>Search users by name, email, phone, etc.,</p>
                        <form role="form">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name">
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1"> Basic
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option2"> VIP
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" value="option3"> Mod
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control">
                                    <option>USA</option>
                                    <option>India</option>
                                    <option>Canada</option>
                                    <option>South Africa</option>
                                    <option>China</option>
                                </select>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Include Banned Users?
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
            </div> <!-- Tab panes End -->
        </div>
    </div> <!-- Users page End -->
@stop
