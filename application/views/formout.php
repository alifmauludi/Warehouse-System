            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Barang Keluar</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="<?= base_url('data/insertout/'.$id_barang.''); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Jumlah</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="jumlah" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tgl. Keluar</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="tgl_keluar" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Keterangan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="ket" id="textarea-input" rows="9" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        <input name="submit" type="submit" class="btn btn-primary btn-sm" value="Submit"/>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>