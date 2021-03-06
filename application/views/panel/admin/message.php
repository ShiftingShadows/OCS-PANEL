<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Inbok 
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>From</th>
                                    <th>Message</th>
                                    <th>Created</th>
                                    <th>Act</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(count($msg) !== 0): ?>
                                        <?php foreach ($msg as $row): ?>
                                            <tr>
                                                <td><?= $row['userid'] ?></td>
                                                <td><?= $row['username'] ?></td>
                                                <td><?= $row['pesan']?></td>
                                                <td><?= $row['created_at']?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/konfirm_msg/').$row['id']?>" class="btn btn-info"> Konfirm</a>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('admin/del_msg/').$row['id'] ?>" class="btn btn-danger"> Del</a>
                                                </td>
                                             </tr>
                                       <?php endforeach; ?>
                                    <?php else: ?>
                                   
                                        <tr>
                                            <td class="text-muted text-center" colspan="6"> No Notify</td>
                                        </tr>
                                   <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
