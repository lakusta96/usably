@extends('app')

 


@section('header')
<style type="text/css">
    .link-to-issue {
    outline: none;
    background-color: #000 !important;
}
</style>
    <script type="text/javascript">
        $(document).ready(function(){
            //add to list animation
            $('.success-alert').click(function AddIssueToList(){
                $(this).parent().parent().parent('.issue').stop(true,true).animate({marginLeft:'150px',opacity:'hide'},700);
            }),
            //success alert animation
            $(".success-alert").click(function showSuccessAlert() {
                setTimeout(function() {
                    $(".alert-success").alert().slideDown(700);
                    $(".alert-success").fadeTo(2000, 1).slideUp(700, function(){
                    $(".alert-success").hide();
                    });
                },300);
            }),
            //error alert animation
            $(".error-alert").click(function showErrorAlert() {
                setTimeout(function() {
                    $(".alert-danger").alert().slideDown(700);
                    $(".alert-danger").fadeTo(2000, 1).slideUp(700, function(){
                    $(".alert-danger").hide();
                    });
                },300)
            });
        });
    </script>

@stop
@section('navigation')
    @include('partials.navigation');
@stop
@section('content')

    <h2>My To-do List<small>Task lists</small></h2>
    <hr />
    <ol class="breadcrumb">
        <i class="fa fa-tasks"></i>
        <li><a href="#">Issues and Fixes</a></li>
        <li class="active">Issues to Fix</li>
    </ol>
    <div class="row">
        <div class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> Issue has been added to to do list succesfully.
        </div>

        <div class="alert alert-danger" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> An error occured while adding issue to list. This information is just for demonstrate.
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs issue-tabs-main" role="tablist">
            <li><a href="#"> Usably Indicators</a></li>
            <li role="presentation" class="active"><a href="#efficiency" data-toggle="tab"></i>Efficiency</a></li>
            <li role="presentation"><a href="#avoiding_mistakes" data-toggle="tab"></i>Avoiding Mistakes</a>
            <li role="presentation"><a href="#" data-toggle="tab"></i>Satisfaction</a> </li>
            <li role="presentation"><a href="#" data-toggle="tab"></i>Information Overload</a></li>
            <li role="presentation"><a href="#" data-toggle="tab"></i>Goal Orientation</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content indicator-desc">
            <div role="tabpanel" class="tab-pane active" id="efficiency">
                <ul class="nav nav-tabs issue-tabs-second" role="tablist">
                    <li role="presentation" class="active"><a href="#efficiency-listed" data-toggle="tab"></i>Issues to Fix (6)</a></li>
                    <li role="presentation"><a href="#efficiency-recommended" data-toggle="tab"></i>Reccomended (10)</a> </li>
                    <li role="presentation"><a href="#efficiency-fixed" data-toggle="tab"></i>Fixed (3)</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="efficiency-listed">
                        <ol>
                            <div class="row issue 1">
                                <div class="col-md-8">
                                    <li><h4>Form validation errors</h4></li>
                                    <span>Make it difficult to take invalid actions. Limit choices when possible to those which are correct, provide clear examples for data entry, present only appropriate navigation option.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 2">
                                <div class="col-md-8">
                                    <li><h4>Navigation</h4></li>
                                    <span>Navigation design elements such as keyboard shortcuts, menus, links and other buttons all have an impact on efficiency</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list error-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 3">
                                <div class="col-md-8">
                                    <li><h4>Shortcuts</h4></li>
                                    <span>When they are well-designed, with clearly expressed actions, less time and effort are needed for the uesr to make navigation and action choices..</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 4">
                                <div class="col-md-8">
                                    <li><h4>Number of clicks</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 5">
                                <div class="col-md-8">
                                    <li><h4>Learnability</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base" ><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 6">
                                <div class="col-md-8">
                                    <li><h4>Lorem ipsum</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                        </ol>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="efficiency-recommended">
                        <ol>
                            <div class="row issue 1">
                                <div class="col-md-8">
                                    <li><h4>Lorem</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 2">
                                <div class="col-md-8">
                                    <li><h4>Lorem</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 3">
                                <div class="col-md-8">
                                    <li><h4>Lorem</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 4">
                                <div class="col-md-8">
                                    <li><h4>Number of clicks</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 5">
                                <div class="col-md-8">
                                    <li><h4>Learnability</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 6">
                                <div class="col-md-8">
                                    <li><h4>Lorem ipsum</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 7">
                                <div class="col-md-8">
                                    <li><h4>Lorem ipsum</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 8">
                                <div class="col-md-8">
                                    <li><h4>Lorem ipsum</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 9">
                                <div class="col-md-8">
                                    <li><h4>Lorem ipsum</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 10">
                                <div class="col-md-8">
                                    <li><h4>Lorem ipsum</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                        </ol>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="efficiency-fixed">
                        <ol>
                            <div class="row issue 1">
                                <div class="col-md-8">
                                    <li><h4>Form validation errors</h4></li>
                                    <span>Make it difficult to take invalid actions. Limit choices when possible to those which are correct, provide clear examples for data entry, present only appropriate navigation option.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 2">
                                <div class="col-md-8">
                                    <li><h4>Navigation</h4></li>
                                    <span>Navigation design elements such as keyboard shortcuts, menus, links and other buttons all have an impact on efficiency</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 3">
                                <div class="col-md-8">
                                    <li><h4>Shortcuts</h4></li>
                                    <span>When they are well-designed, with clearly expressed actions, less time and effort are needed for the uesr to make navigation and action choices..</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                        </ol>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="avoiding_mistakes">
                <ul class="nav nav-tabs issue-tabs-second" role="tablist">
                    <li role="presentation" class="active"><a href="#avoiding_mistakes-listed" data-toggle="tab"></i>Issues to Fix (3)</a></li>
                    <li role="presentation"><a href="#avoiding_mistakes-recommended" data-toggle="tab"></i>Reccomended (5)</a> </li>
                    <li role="presentation"><a href="#avoiding_mistakes-fixed" data-toggle="tab"></i>Fixed (2)</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="avoiding_mistakes-listed">
                        <ol>
                            <div class="row issue 1">
                                <div class="col-md-8">
                                    <li><h4>Lorem ipsum</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 2">
                                <div class="col-md-8">
                                    <li><h4>Navigation</h4></li>
                                    <span>Navigation design elements such as keyboard shortcuts, menus, links and other buttons all have an impact on efficiency</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 3">
                                <div class="col-md-8">
                                    <li><h4>Shortcuts</h4></li>
                                    <span>When they are well-designed, with clearly expressed actions, less time and effort are needed for the uesr to make navigation and action choices..</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 4">
                                <div class="col-md-8">
                                    <li><h4>Number of clicks</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 5">
                                <div class="col-md-8">
                                    <li><h4>Learnability</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 6">
                                <div class="col-md-8">
                                    <li><h4>Lorem ipsum</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                        </ol>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="avoiding_mistakes-recommended">
                        <ol>
                            <div class="row issue 1">
                                <div class="col-md-8">
                                    <li><h4>Lorem</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 2">
                                <div class="col-md-8">
                                    <li><h4>Lorem</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="/knowledge-base"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 3">
                                <div class="col-md-8">
                                    <li><h4>Lorem</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 4">
                                <div class="col-md-8">
                                    <li><h4>Number of clicks</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 5">
                                <div class="col-md-8">
                                    <li><h4>Learnability</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 6">
                                <div class="col-md-8">
                                    <li><h4>Lorem ipsum</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 7">
                                <div class="col-md-8">
                                    <li><h4>Lorem ipsum</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 8">
                                <div class="col-md-8">
                                    <li><h4>Lorem ipsum</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 9">
                                <div class="col-md-8">
                                    <li><h4>Lorem ipsum</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 10">
                                <div class="col-md-8">
                                    <li><h4>Lorem ipsum</h4></li>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                        </ol>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="avoiding_mistakes-fixed">
                        <ol>
                            <div class="row issue 1">
                                <div class="col-md-8">
                                    <li><h4>Form validation errors</h4></li>
                                    <span>Make it difficult to take invalid actions. Limit choices when possible to those which are correct, provide clear examples for data entry, present only appropriate navigation option.</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 2">
                                <div class="col-md-8">
                                    <li><h4>Navigation</h4></li>
                                    <span>Navigation design elements such as keyboard shortcuts, menus, links and other buttons all have an impact on efficiency</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="row issue 3">
                                <div class="col-md-8">
                                    <li><h4>Shortcuts</h4></li>
                                    <span>When they are well-designed, with clearly expressed actions, less time and effort are needed for the uesr to make navigation and action choices..</span>
                                </div>
                                <div class="col-md-4 issue-actions">
                                    <div><a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a></div>
                                    <div><a class="view-issue-details" href="#"><span>View details</span><i class="fa fa-info-circle"></i></a></div>
                                </div>
                            </div>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('footer')

@stop