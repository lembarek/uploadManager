<div class="modal fade" id="modal-folder-delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          ×
        </button>
        <h4 class="modal-title">{{ trans('uploadManager::uploadManager.please_confirm') }}</h4>
      </div>
      <div class="modal-body">
        <p class="lead">
          <i class="fa fa-question-circle fa-lg"></i>
          {{ trans('uploadManager::uploadManager.are_you_sure_you_want_to_delete_the_folder') }}
          <kbd><span id="delete-folder-name1">folder</span></kbd>?
        </p>
      </div>
      <div class="modal-footer">
          <form method="POST" action="{{ route('uploadManager::upload.folder') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="folder" value="{{ $folder }}">
          <input type="hidden" name="del_folder" id="delete-folder-name2">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            {{ trans('uploadManager::uploadManager.cancel') }}
          </button>
          <button type="submit" class="btn btn-danger">
            {{ trans('uploadManager::uploadManager.delete_folder') }}
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
