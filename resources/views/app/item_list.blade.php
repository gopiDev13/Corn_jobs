@extends('layouts.app')
@section('content')

<div>
    <div class="row">
        <div class="col-6">
<h3 class="mt-5 header-inner">Items List</h3>
</div>
{{--<div class="col-5 text-right">
                <a
                    href="{{ route('item.create') }}"
                    class="btn btn-primary create_user create_mentor_btn new-btn mt-5"
                >
                 Create Item
                </a>
            </div>--}}
</div>
    
            

            <div class="table-responsive cdms-table-con">
                <form id="itemform" action="{{route('orders.store')}}" method="POST">
                    @csrf
                <table class="table table-hover cdms-table cdms-table-user table-bordered" aria-label="categories_table" style="margin-left: 280px;width: 75%;">
                    <thead>
                        <tr>
                        <th class="text-center">
                               S.No
                            </th>
                            <th class="text-center">
                               Item Category Name
                            </th>
                            <th class="text-center">
                               Item Sub-Category Name
                            </th>
                            <th class="text-center">
                               Item Name
                            </th>
                            <th class="text-center">
                               Order
                            </th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($items as $index => $item)
                        <tr>
                        <td class="text-center">{{  $index+1 ?? '-' }}</td>
                            <td class="text-center">{{ ucfirst($item->subcategories->categories->name) ?? '-' }}
                            </td>
                            <td class="text-center">{{ ucfirst($item->subcategories->name) ?? '-' }}
                            </td>
                            <td class="text-center">{{ ucfirst($item->name) ?? '-' }}

                            </td>
                            <td class="text-center">
                            <input type="checkbox" name="orders[]" value="{{ $item->id ?? '' }}" />

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
                <button type="submit" class="btn btn-primary" style="
    margin-left: 88%;
">
                              Buy
</button>
               </form>
            </div>
        </div>
   @endsection