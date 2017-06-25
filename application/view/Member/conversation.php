<?php
$this->title = 'Conversation Membre';
?>
<div class="row">  
    <div class="col-sm-12 col-md-12" id="pan-member-conv">        
<!--        <div class="btn_activer_enligne btn-padding">
            <a href="/member-connected"  class="btn btn-info pull-left "><i class="fa fa-arrow-left"></i><span> Retour au menu principal</span></a>  
        </div> </br>
        <h4 style="text-align: center;"></h4>-->
         <div class="box" style="border-top-color: #3c8dbc;">
        <div class="box-header bg-info text-center" >
            <i class="fa fa-desktop"></i> 
            <h3 class="box-title" >
                <strong style="color:#000"> Conversation</strong>
            </h3>
        </div>
        <div class="box-header">
            <h3 class="box-title"></h3>
            <a class="label label-success" href="#" title="Ecrire un nouveau message"><i class="fa "></i> Nouveau message</a>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding" >
            <table class="table table-hover">
                <tr>
                    <th>
                <form action="#" method="get" >
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Rechercher contact...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
                </th>
                <th class="text-center"><i class="fa fa-inbox"></i>     Boite de réception</th>
                </tr>
                <tr>
                    <td class="   col-md-2 " >

                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">Contacts</h3>
                                <div class="box-tools">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active" style="   
                                        border-radius: 1px;
                                        position: relative;
                                        padding: 5px 10px;
                                        background: #d2d6de;
                                        border: 1px solid #d2d6de;

                                        "><a href="#"> Jenny Patrick <span class="label label-primary pull-right">12</span></a></li>
                                    <li><a href="#"> John Salvatore</a></li>
                                    <li><a href="#"> Transoam Admin</a></li>
                                    <li><a href="#"> Genièvre <span class="label label-warning pull-right">65</span></a></li>
                                    <li><a href="#"> Abou</a></li>
                                </ul>
                            </div><!-- /.box-body -->
                        </div><!-- /. box -->
                    </td>
                    <td>
                        <div class="box box-primary direct-chat direct-chat-primary col-lg-10">
                            <div class="box-header with-border">
                                <h3 class="box-title">Chat</h3>
                                <div class="box-tools pull-right">
                                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-light-blue">3</span>

                                    <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>

                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <!-- Conversations are loaded here -->
                                <div class="direct-chat-messages">
                                    <!-- Message. Default to the left -->
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-left"> Jenny Patrick </span>
                                            <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                        </div><!-- /.direct-chat-info -->

                                        <div class="direct-chat-text">
                                            Bonjour, çva ?
                                        </div><!-- /.direct-chat-text -->
                                    </div><!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                            <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                        </div><!-- /.direct-chat-info -->

                                        <div class="direct-chat-text">
                                            Bjr, çava bien, john
                                        </div><!-- /.direct-chat-text -->
                                    </div><!-- /.direct-chat-msg -->
                                </div><!--/.direct-chat-messages-->

                                <!-- Contacts are loaded here -->
                                <div class="direct-chat-contacts">
                                    <ul class="contacts-list">
                                        <li>
                                            <a href="#">

                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-name">
                                                        Count Dracula
                                                        <small class="contacts-list-date pull-right">2/28/2015</small>
                                                    </span>
                                                    <span class="contacts-list-msg">How have you been? I was...</span>
                                                </div><!-- /.contacts-list-info -->
                                            </a>
                                        </li><!-- End Contact Item -->
                                    </ul><!-- /.contatcts-list -->
                                </div><!-- /.direct-chat-pane -->
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="Votre message ..." class="form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary btn-flat">Envoyer</button>
                                        </span>
                                    </div>
                                </form>
                            </div><!-- /.box-footer-->
                        </div>
                    </td>

                </tr>
            </table>
        </div><!-- /.box-body -->
    </div> 
</div> 
</div> 

