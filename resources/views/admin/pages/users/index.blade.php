@extends('adminlte::page')

@section('title', __('pages.users.title_user'))

@section('content_header')
<h4 class="m-0 text-dark">{{ __('pages.users.title_user') }}</h4>
@stop

@section('content_breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item">
        <a href="">{{ __('pages.users.title_user') }}</a>
    </li>
</ol>
@stop

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div id="app-user">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6"><h5 class="mb-1 mt-1">Danh sách nhân viên</h5></div>
                                    <div class="col-6 text-right">
                                        <button class="btn btn-sm btn-outline-success"><i class="fas fa-plus"></i>
                                            Thêm nhân viên
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="user-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="datatable-header--custom row">
                                        <div class="col-md-12 text-left"></div>
                                    </div>
                                    <div>
                                        <table id="user-table" class="table table-bordered dataTable no-footer"
                                               role="grid" style="width: 100%;" width="100%" cellspacing="0">
                                            <thead>
                                            <tr role="row">
                                                <th class="align-middle sorting" tabindex="0" aria-controls="user-table"
                                                    rowspan="1" colspan="1" style="width: 322px;"
                                                    aria-label="Tên đăng nhập: Sắp xếp thứ tự tăng dần">Tên đăng nhập
                                                </th>
                                                <th class="align-middle sorting" tabindex="0" aria-controls="user-table"
                                                    rowspan="1" colspan="1" style="width: 322px;"
                                                    aria-label="Email: Sắp xếp thứ tự tăng dần">Email
                                                </th>
                                                <th class="align-middle sorting" tabindex="0" aria-controls="user-table"
                                                    rowspan="1" colspan="1" style="width: 302px;"
                                                    aria-label="Tên đầy đủ: Sắp xếp thứ tự tăng dần">Tên đầy đủ
                                                </th>
                                                <th class="align-middle sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 336px;" aria-label="Chức vụ">Chức vụ
                                                </th>
                                                <th class="align-middle sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 125px;" aria-label="Thao tác">Thao tác
                                                </th>
                                            </tr>
                                            <tr role="row">
                                                <th rowspan="1" colspan="1"><input type="text"
                                                                                   class="form-control form-control-sm">
                                                </th>
                                                <th rowspan="1" colspan="1"><input type="text"
                                                                                   class="form-control form-control-sm">
                                                </th>
                                                <th rowspan="1" colspan="1"><input type="text"
                                                                                   class="form-control form-control-sm">
                                                </th>
                                                <th rowspan="1" colspan="1"><select
                                                        class="form-control form-control-sm">
                                                        <option value="" selected="selected">Tất cả</option>
                                                        <option value="2b3602a0-e59b-4d80-82fa-84dbe2cbb8e5">
                                                            super_admin
                                                        </option>
                                                        <option value="34d079f5-c788-486b-b5d8-fe716a99c218">Dr. Kraig
                                                            Lindgren IV
                                                        </option>
                                                        <option value="4f59f5e5-ba25-45bd-b813-94d955eb1a31">Mr. Dax
                                                            Erdman
                                                        </option>
                                                        <option value="7fd6e028-12ed-4e18-ab65-f61ffaf0144e">
                                                            phochutich
                                                        </option>
                                                        <option value="b8cabae4-0ad1-4e7e-b2d7-882f5451a38f">Adan
                                                            Windler
                                                        </option>
                                                        <option value="d065bb1d-4342-4904-b1e6-f1f6431c4171">Major
                                                            Heaney
                                                        </option>
                                                        <option value="ed6d2b20-19e7-46b9-8dae-c4c492a48dff">Prof.
                                                            Junior Rodriguez DDS
                                                        </option>
                                                    </select></th>
                                                <th rowspan="1" colspan="1"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td class=" align-middle">leanna59@example.com</td>
                                                <td class=" align-middle">leanna59@example.com</td>
                                                <td class=" align-middle">Norval O'Kon</td>
                                                <td class=" align-middle"></td>
                                                <td class=" align-middle">
                                                    <button class="btn btn-sm btn-outline-primary btn-edit"
                                                            data-id="07beb2ef-a6a5-4263-983e-9fe62092c3be">
                                                        <i class="fas fa-user-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger btn-delete"
                                                            data-id="07beb2ef-a6a5-4263-983e-9fe62092c3be">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class=" align-middle">clair.mcclure@example.com</td>
                                                <td class=" align-middle">clair.mcclure@example.com</td>
                                                <td class=" align-middle">Nadia Rath</td>
                                                <td class=" align-middle"></td>
                                                <td class=" align-middle">
                                                    <button class="btn btn-sm btn-outline-primary btn-edit"
                                                            data-id="2bc6bed1-8961-4c02-8276-9936788d5040">
                                                        <i class="fas fa-user-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger btn-delete"
                                                            data-id="2bc6bed1-8961-4c02-8276-9936788d5040">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr role="row" class="even">
                                                <td class=" align-middle">duc@gmail.com</td>
                                                <td class=" align-middle">duc@gmail.com</td>
                                                <td class=" align-middle">tran tien duc</td>
                                                <td class=" align-middle"></td>
                                                <td class=" align-middle">
                                                    <button class="btn btn-sm btn-outline-primary btn-edit"
                                                            data-id="d3974862-8385-4da6-877b-bc7d6cf367ef">
                                                        <i class="fas fa-user-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger btn-delete"
                                                            data-id="d3974862-8385-4da6-877b-bc7d6cf367ef">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 float-right">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="user-table_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="user-table_previous"><a href="#" aria-controls="user-table"
                                                                                    data-dt-idx="0" tabindex="0"
                                                                                    class="page-link">Trước</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                                                                    aria-controls="user-table"
                                                                                                    data-dt-idx="1"
                                                                                                    tabindex="0"
                                                                                                    class="page-link">1</a>
                                                    </li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                                                              aria-controls="user-table"
                                                                                              data-dt-idx="2"
                                                                                              tabindex="0"
                                                                                              class="page-link">2</a>
                                                    </li>
                                                    <li class="paginate_button page-item next" id="user-table_next"><a
                                                            href="#" aria-controls="user-table" data-dt-idx="3"
                                                            tabindex="0" class="page-link">Tiếp</a></li>
                                                </ul>
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

@stop
@section('css')
@stop
@section('js')
<script>
    const message = `{!! session()->get('success') ?? null !!}`;
    const SUPER_ADMIN_TEXT = `{{ __('app.super_admin') }}`
    const EDIT_USER_BUTTON_TEXT = `{{ __('app.save_button_text') }}`
    const CAN_EDIT_USER = true ;
    const CAN_DELETE_USER = true ;
</script>
<script type="module" src="{{ asset('assets/admin/js/pages/user.js') }}"></script>
@stop
