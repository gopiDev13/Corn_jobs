@extends('layouts.app')
@section('content')

<div>
    <div class="row">
        <div class="col-6">
<h3 class="mt-5 header-inner">Categories List</h3>
</div>
<div class="col-5 text-right">
                <a
                    href="{{ route('category.create') }}"
                    class="btn btn-primary create_user create_mentor_btn new-btn mt-5"
                >
                 Create Category
                </a>
            </div>
</div>
    
            

            <div class="table-responsive cdms-table-con">
                <table class="table table-hover cdms-table cdms-table-user table-bordered" aria-label="categories_table" style="margin-left: 280px;width: 75%;">
                    <thead>
                        <tr>
                        <th class="text-center">
                               S.No
                            </th>
                            <th class="text-center">
                               Category name
                            </th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($category as $index => $category)
                        <tr>
                        <td class="text-center">{{  $index+1 ?? '-' }}</td>
                            <td class="text-center">{{ ucfirst($category->name) ?? '-' }}</td>
                            
                           
                            
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                ---
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
                </table>
            </div>
        </div>
   @endsection