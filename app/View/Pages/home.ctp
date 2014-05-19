<?php
$this->Html->script(array('jquery.flot.min', 'justgage.1.0.1.min', 'raphael.2.1.0.min', 'app/home'), array('inline' => false));
$this->Html->script('excanvas.min', array('inline' => false, 'block' => 'scriptOldIE'));
?>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Server information</h3>
            </div>
            <div class="panel-body">
                <p><strong>Server name here</strong></p>
                <p>Server description here</p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="30%"></th>
                            <th width="75%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Version</td>
                            <td>CraftBukkit 1.6.4-R2.0</td>
                        </tr>
                        <tr>
                            <td>IP</td>
                            <td>192.168.13.37</td>
                        </tr>
                        <tr>
                            <td>Port</td>
                            <td>25565</td>
                        </tr>
                        <tr>
                            <td>Players online</td>
                            <td>0/20</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><span class="label label-success">Online</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Latest events</h3>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="20%">Time</th>
                            <th width="80%">Event</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-info">
                            <td>10:51</td>
                            <td>Server restarted (Automatic)</td>
                        </tr>
                        <tr class="bg-success">
                            <td>10:51</td>
                            <td>Map saved (Automatic)</td>
                        </tr>
                        <tr class="bg-info">
                            <td>10:52</td>
                            <td>server restarted (Manual)</td>
                        </tr>
                        <tr class="bg-danger">
                            <td>10:53</td>
                            <td>Server crash</td>
                        </tr>
                        <tr class="bg-danger">
                            <td>10:57</td>
                            <td>Server crash</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-lg-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">System Resource Information</h3>
            </div>
            <div class="panel-body" id="systemResourceInformation">
                <fieldset>
                    <legend>CPU</legend>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-4">
                                <div id="cpuGauge"></div>
                            </div>
                            <div id="cpuChart" class="chart col-sm-8 col-md-9 col-lg-8 hidden-xs" style="height: 150px;"></div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Memory</legend>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-4">
                                <p>Available 3,4 GB</p>
                                <p>In use 4,4 GB</p>
                                <p>Total 8GB</p>
                                <div id="memoryGauge"></div>
                            </div>
                            <div id="memoryChart" class="chart col-sm-8 col-md-9 col-lg-8 hidden-xs" style="height: 200px;"></div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Bandwidth</legend>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-4">
                                <p>up 10kb/sec</p>
                                <p>down 3kb/sec</p>
                            </div>
                            <div id="dataChart" class="chart col-sm-8 col-md-9 col-lg-8 hidden-xs" style="height: 130px;"></div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>