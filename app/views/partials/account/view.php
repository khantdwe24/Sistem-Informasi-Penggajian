<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">My Account</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div class="bg-primary m-2 mb-4">
                            <div class="profile">
                                <div class="avatar">
                                    <?php 
                                    if(!empty(USER_PHOTO)){
                                    Html::page_img(USER_PHOTO, 100, 100); 
                                    }
                                    ?>
                                </div>
                                <h1 class="title mt-4"><?php echo $data['name']; ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mx-3 mb-3">
                                    <ul class="nav nav-pills flex-column text-left">
                                        <li class="nav-item">
                                            <a data-toggle="tab" href="#AccountPageView" class="nav-link active">
                                                <i class="fa fa-user"></i> Account Detail
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="tab" href="#AccountPageEdit" class="nav-link">
                                                <i class="fa fa-edit"></i> Edit Account
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="tab" href="#AccountPageChangeEmail" class="nav-link">
                                                <i class="fa fa-envelope"></i> Change Email
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="tab" href="#AccountPageChangePassword" class="nav-link">
                                                <i class="fa fa-key"></i> Reset Password
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <div class="tab-content">
                                        <div class="tab-pane show active fade" id="AccountPageView" role="tabpanel">
                                            <table class="table table-hover table-borderless table-striped">
                                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                                    <tr  class="td-id">
                                                        <th class="title"> Id: </th>
                                                        <td class="value"> <?php echo $data['id']; ?></td>
                                                    </tr>
                                                    <tr  class="td-name">
                                                        <th class="title"> Name: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['name']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="name" 
                                                                data-title="Enter Name" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['name']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-email">
                                                        <th class="title"> Email: </th>
                                                        <td class="value"> <?php echo $data['email']; ?></td>
                                                    </tr>
                                                    <tr  class="td-nip">
                                                        <th class="title"> Nip: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['nip']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="nip" 
                                                                data-title="Enter Nip" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['nip']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-pendidikan">
                                                        <th class="title"> Pendidikan: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['pendidikan']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="pendidikan" 
                                                                data-title="Enter Pendidikan" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['pendidikan']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-kota_lahir">
                                                        <th class="title"> Kota Lahir: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['kota_lahir']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="kota_lahir" 
                                                                data-title="Enter Kota Lahir" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['kota_lahir']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-tgl_lahir">
                                                        <th class="title"> Tgl Lahir: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['tgl_lahir']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="tgl_lahir" 
                                                                data-title="Enter Tgl Lahir" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['tgl_lahir']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-tgl_masuk">
                                                        <th class="title"> Tgl Masuk: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['tgl_masuk']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="tgl_masuk" 
                                                                data-title="Enter Tgl Masuk" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['tgl_masuk']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-jk">
                                                        <th class="title"> Jk: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['jk']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="jk" 
                                                                data-title="Enter Jk" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['jk']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-agama">
                                                        <th class="title"> Agama: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['agama']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="agama" 
                                                                data-title="Enter Agama" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['agama']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-status">
                                                        <th class="title"> Status: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['status']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="status" 
                                                                data-title="Enter Status" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['status']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-alamat">
                                                        <th class="title"> Alamat: </th>
                                                        <td class="value">
                                                            <span  data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="alamat" 
                                                                data-title="Enter Alamat" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="textarea" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['alamat']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-jenis_karyawan">
                                                        <th class="title"> Jenis Karyawan: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['jenis_karyawan']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="jenis_karyawan" 
                                                                data-title="Enter Jenis Karyawan" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['jenis_karyawan']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-divisi_id">
                                                        <th class="title"> Divisi Id: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['divisi_id']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="divisi_id" 
                                                                data-title="Enter Divisi Id" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="number" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['divisi_id']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-jabatan_id">
                                                        <th class="title"> Jabatan Id: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['jabatan_id']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="jabatan_id" 
                                                                data-title="Enter Jabatan Id" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="number" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['jabatan_id']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-remember_token">
                                                        <th class="title"> Remember Token: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['remember_token']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="remember_token" 
                                                                data-title="Enter Remember Token" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['remember_token']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-created_at">
                                                        <th class="title"> Created At: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['created_at']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="created_at" 
                                                                data-title="Enter Created At" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['created_at']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-updated_at">
                                                        <th class="title"> Updated At: </th>
                                                        <td class="value">
                                                            <span  data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                                data-value="<?php echo $data['updated_at']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="updated_at" 
                                                                data-title="Enter Updated At" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="flatdatetimepicker" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['updated_at']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>    
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="AccountPageEdit" role="tabpanel">
                                            <div class=" reset-grids">
                                                <?php  $this->render_page("account/edit"); ?>
                                            </div>
                                        </div>
                                        <div class="tab-pane  fade" id="AccountPageChangeEmail" role="tabpanel">
                                            <div class=" reset-grids">
                                                <?php  $this->render_page("account/change_email"); ?>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="AccountPageChangePassword" role="tabpanel">
                                            <div class=" reset-grids">
                                                <?php  $this->render_page("passwordmanager"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        else{
                        ?>
                        <!-- Empty Record Message -->
                        <div class="text-muted p-3">
                            <i class="fa fa-ban"></i> No Record Found
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
