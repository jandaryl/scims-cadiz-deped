@lang('labels.user.account_delete')

<form action="{{ route('user.account.delete') }}" method="POST">
    @csrf
    @method('DELETE')

    <button class="btn btn-danger lg:text-lg md:text-base sm:text-sm text-sm"
            data-toggle="confirm"
            data-trans-button-cancel="@lang('buttons.cancel')"
            data-trans-button-confirm="@lang('buttons.delete')"
            data-trans-title="@lang('labels.are_you_sure')">@lang('labels.user.delete')</button>
</form>
