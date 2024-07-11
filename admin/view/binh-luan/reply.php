<?php $reply_comment = detail_binh_luan_by_id($_GET['id']) ?>
<div class="main-content">
    <div class="page-content pt-4">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Quản lý bình luận</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">Quản lý bình luận</a>
                                </li>
                                <li class="breadcrumb-item active">Trả lời bình luận</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="?act=reply-comment" method="post" id="myForms" onsubmit="return checkForms()">
                            <div class="card-body">
                                <h4 class="card-title">Trả lời bình luận
                                    <a href="?act=list-comment" class="btn btn-success float-right " style="transform: translateY(-30%);">Danh sách bình luận</a>
                                </h4>
                                <div class="form-group">
                                    <label for="simpleinput">Bình luận của khách hàng</label>
                                    <input type="text" id="simpleinput" class="form-control" placeholder="Enter your text" value="<?php echo $reply_comment['noi_dung'] ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Nội dung</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nhập nội dung trả lời" name="content"></textarea>
                                    <div class="invalid-feedback">
                                        Bạn phải nhập nội dung phản hồi
                                    </div>
                                </div>
                                <div class="form-group mb-0 justify-content-end row">
                                    <div class="col">
                                        <input type="text" value="<?php echo $reply_comment['id_binh_luan'] ?>" name="id_binh_luan" readonly hidden>
                                        <button type="submit" class="btn btn-info waves-effect waves-light" value="Reply" name="reply">Phản
                                            hồi</button>
                                    </div>
                                </div>

                            </div>

                            <!-- end card-body-->
                        </form>
                    </div>
                </div>
            </div>
            <!-- end page title -->

        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">2023 © Nguyễn Huy Tới.</div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                        Quản lý Website
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>