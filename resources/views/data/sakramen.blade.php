<div class="container-fluid">
    <div class="row" data-pg-collapsed>
        <div class="col-md-12 col-xs-12 page-title">
            <h1 style="display: block;">Manajemen Sakramen Umat</h1>
            <hr />
        </div>
    </div>
    <div class="row" data-pg-collapsed>
        <form id="form-sakramen" class="form-horizontal" action="#">
            <div class="form-group">
                <div class="col-sm-3" style="text-align:right;">
                    <label class="control-label " for="formInput62">Nama Umat</label>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <select id="formInput62" class="form-control form-control-multi form-control-narrow">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <div class="col-md-4">
                            <input type="text" class="form-control form-control-multi form-control-wide" placeholder="Placeholder text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3" style="text-align:right;">
                    <label class="control-label" for="exampleInputPassword1">Jenis Sakramen</label>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <select class="form-control form-control-dates">
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    <label class="control-label crsa-selected" for="exampleInputFile">Tanggal Terima Sakramen</label>
                </div>
                <div class="col-sm-4" style="display:inline;">
                    <select class="form-control form-control-dates">
                        <option selected>31</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                    <select class="form-control form-control-dates">
                        <option selected>12</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                    <select class="form-control form-control-dates" style="width:100px;">
                        <option selected>1999</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3" style="text-align:right;">
                    <label class="control-label " for="formInput109">Pemberi Sakramen</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="formInput109" placeholder="Placeholder text" style="min-width:150px; width:300px;">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3" style="text-align:right;">
                    <label class="control-label " for="formInput109">Tempat menerima</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="formInput109" placeholder="Placeholder text" style="min-width:150px; width:300px;">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3" style="text-align:right;">
                    <label class="control-label " for="formInput109">No. Sertifikat</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="formInput109" placeholder="Placeholder text" style="min-width:150px; width:300px;">
                </div>
            </div>
            <div class="form-group">
                <div class="     col-sm-offset-3 col-sm-4">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-danger btn-block btn-lg">Batal</button>
                    </div>
                    <div class="  offset-4  col-sm-2 col-md-6">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Submit</button>
                    </div>
                </div>
            </div>
            <hr style="width:95%; background-color : #870000" />
        </form>
    </div>
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <h2 style="display: block;">Daftar Penerima Sakramen Permandian</h2>
                    <hr style="width: 100%; display: block; background-color: rgb(135, 0, 0);">
                </div>
            </div>
            <div class="row" style="margin-bottom:10px;">
                <div class="col-md-12 col-xs-12">
                    <form role="form" class="form-inline clearfix pull-right" id="filterPermandian">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Umat" style="width:200px; float: left; margin-right: 15px;">
                        <select class="form-control form-control-dates" style="width:150px;">
                            <option value="1">Januari</option>
                            <option>2</option>
                            <option>3</option>
                            <select class="form-control form-control-dates">
                            </select>
                        </select>
                        <select class="form-control form-control-dates" style="width:90px;">
                            <option value="1999">1999</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <select class="form-control form-control-multi form-control-wide" style="width:300px; margin-right: 15px; float:left;">
                            <option value="1">St. Joseph</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <button type="submit" class="btn" style="float: left; width: 100px;">Filter</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table-bordered table-hover">
                        <thead style="display: table-header-group; padding-top: 2px;" data-pg-collapsed>
                        <th style="display: table-cell;">Nama</th>
                        <th style="display: table-cell;">Tanggal Sakramen</th>
                        <th style="display: table-cell;">Lingkungan</th>
                        <th style="display: table-cell;">Alamat</th>
                        <th style="display: table-cell;">Pemberi Sakramen</th>
                        <th style="display: table-cell;">Tempat Menerima</th>
                        <th style="display: table-cell;">No. Sertifikat</th>
                        <th style="display: table-cell;">Aksi</th>
                        <th style="display: table-cell;">Aksi</th>
                        </thead>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                    </table>
                    <hr style="width: 100%; display: block; background-color: rgb(135, 0, 0);">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <h2 style="display: block;">Daftar Penerima Sakramen Krisma</h2>
                    <hr style="width: 100%; display: block; background-color: rgb(135, 0, 0);">
                </div>
            </div>
            <div class="row" style="margin-bottom:10px;">
                <div class="col-md-12 col-xs-12">
                    <form role="form" class="form-inline clearfix pull-right" id="filterPermandian">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Umat" style="width:200px; float: left; margin-right: 15px;">
                        <select class="form-control form-control-dates" style="width:150px;">
                            <option value="1">Januari</option>
                            <option>2</option>
                            <option>3</option>
                            <select class="form-control form-control-dates">
                            </select>
                        </select>
                        <select class="form-control form-control-dates" style="width:90px; float:left;">
                            <option value="1999">1999</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <select class="form-control form-control-multi form-control-wide" style="width:300px; margin-right: 15px;">
                            <option value="1">St. Joseph</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <button type="submit" class="btn" style="float: left; width: 100px;">Filter</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table-bordered table-hover">
                        <thead style="display: table-header-group; padding-top: 2px;" data-pg-collapsed>
                        <th style="display: table-cell;">Nama</th>
                        <th style="display: table-cell;">Tanggal Sakramen</th>
                        <th style="display: table-cell;">Lingkungan</th>
                        <th style="display: table-cell;">Alamat</th>
                        <th style="display: table-cell;">Pemberi Sakramen</th>
                        <th style="display: table-cell;">Tempat Menerima</th>
                        <th style="display: table-cell;">No. Sertifikat</th>
                        <th style="display: table-cell;">Aksi</th>
                        <th style="display: table-cell;">Aksi</th>
                        </thead>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                    </table>
                    <hr style="width: 100%; display: block; background-color: rgb(135, 0, 0);">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <h2 style="display: block;">Daftar Penerima Sakramen Perkawinan</h2>
                    <hr style="width: 100%; display: block; background-color: rgb(135, 0, 0);">
                </div>
            </div>
            <div class="row" style="margin-bottom:10px;">
                <div class="col-md-12 col-xs-12">
                    <form role="form" class="form-inline clearfix pull-right" id="filterPermandian">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Umat" style="width:200px; float: left; margin-right: 15px;">
                        <select class="form-control form-control-dates" style="width:150px;">
                            <option value="1">Januari</option>
                            <option>2</option>
                            <option>3</option>
                            <select class="form-control form-control-dates">
                            </select>
                        </select>
                        <select class="form-control form-control-dates" style="width:90px;">
                            <option value="1999">1999</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <select class="form-control form-control-multi form-control-wide" style="width:300px; margin-right: 15px;">
                            <option value="1">St. Joseph</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <button type="submit" class="btn" style="float: left; width: 100px;">Filter</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table-bordered table-hover">
                        <thead style="display: table-header-group; padding-top: 2px;" data-pg-collapsed>
                        <th style="display: table-cell;">Nama</th>
                        <th style="display: table-cell;">Tanggal Sakramen</th>
                        <th style="display: table-cell;">Lingkungan</th>
                        <th style="display: table-cell;">Alamat</th>
                        <th style="display: table-cell;">Pemberi Sakramen</th>
                        <th style="display: table-cell;">Tempat Menerima</th>
                        <th style="display: table-cell;">No. Sertifikat</th>
                        <th style="display: table-cell;">Aksi</th>
                        <th style="display: table-cell;">Aksi</th>
                        </thead>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                        <tr class="">
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                            <td class="">xxxxx</td>
                        </tr>
                    </table>
                    <hr style="width: 100%; display: block; background-color: rgb(135, 0, 0);">
                </div>
            </div>
        </div>
    </div>
</div>