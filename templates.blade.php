<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@include('restaurant::default.restaurant.partial.header',@$restaurant_onboard)
<div class="app-content-wrap">
    @include('groups::default.group.partial.aside')

    <div class="app-content-inner">
        <div class="app-entry-form-wrap app-entry-form-wrap-actions-mobile-bottom">
            <div class="app-sec-title app-sec-title-with-icon app-sec-title-with-action actions-mobile-bottom">
                <i class="fas fa-swatchbook fa-2x"></i>
                <h1>&nbsp;&nbsp;Content Templates</h1>
                <div class="actions">
                     <a href="#massScheduleButton" id="massScheduleButton" class="btn btn-with-icon btn-dark mb-1 mb-sm-0"><i class="fas fa-plus-circle mr-5"></i>Mass Schedule</a>
                    <a style="pointer-events:none;display:none; " class="btn btn-dark"
                    id="massScheduleSpinner">Loading...<i class="las la-arrow-circle-right"></i>
                    <span class="spinner-border spinner-border-sm" role="status"
                    aria-hidden="true"></span> </a>
                    <a href="#generateTemplate" id="generateTemplate" class="btn btn-with-icon btn-dark mb-1 mb-sm-0"><i class="fas fa-plus-circle mr-5"></i>Generate Templates</a>
                    <a style="pointer-events:none;display:none; " class="btn btn-dark"
                    id="generateTemplateSpinner">Loading...<i class="las la-arrow-circle-right"></i>
                    <span class="spinner-border spinner-border-sm" role="status"
                    aria-hidden="true"></span> </a>
                    <a href="{{ guard_url('groups/content-templates/create') }}" class="btn btn-with-icon btn-dark"><i class="fas fa-plus-circle mr-5"></i>Create Template</a>
                </div>
                <a href="{{ guard_url('/') }}" class="back-nav"><i class="fas fa-chevron-left"></i></a>
            </div>


            <div class="app-conent-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link {{ Request::is('restaurant/groups/content-templates') ? 'active' : '' }}"
                            href="{{ guard_url('groups/content-templates') }}" id="new-orders-tab">Design Templates</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link {{ Request::is('restaurant/groups/html-templates') ? 'active' : '' }}" href="{{ guard_url('groups/html-templates') }}" id="past-orders-tab">Custom Templates</a>
                    </li>
                </ul>
                {{-- <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="new-orders-tab">
                        <div class="order-list-wrap">

                        </div>
                    </div>
                </div> --}}






            <div class="campaign-template-wrap mt-10 p-3">
                <div class="row">

                    @if ($templates->isNotEmpty())
                        @foreach ($templates as $key => $template)
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="campaign-template-item">
                                    <input type="radio" name="campaign_template" id="campaign_template_{{$key}}">
                                    <label for="campaign_template_{{$key}}">
                                        @if($template->sent_template_campaigns->isNotEmpty())
                                        @php
                                        $toolTip = "";
                                        $usedCount = 0;
                                        @endphp
                                        @foreach($template->sent_template_campaigns as $campaigns)
                                        @php
                                        $scheduleDate = $campaigns->schedule;
                                        $toolTip = @$toolTip." ".date('M d Y', strtotime($scheduleDate))." - ".$campaigns->campaign_name." ";
                                        $usedCount++;
                                        @endphp
                                        @endforeach
                                        {{-- {{dd($scheduleDate)}} --}}
                                        <div data-toggle="tooltip" data-html="true" title="{!!$toolTip!!}" class="badge badge-warning" style="margin-left: 68px;">{{date('M d Y', strtotime($scheduleDate))}} - {{$usedCount == 1 ? $usedCount. ' time' : $usedCount. ' times'}}</div>
                                        @endif
                                        @if(isset($template->theme_design))
                                        <div class="badge badge-success"> 
                                            {{$template->theme_design == 'design1' ? 'Design 1' :'' }}
                                            {{$template->theme_design == 'design2' ? 'Design 2' :'' }}
                                            {{$template->theme_design == 'design3' ? 'Design 3' :'' }}
                                        </div>
                                        @endif
                                        <div class="campaign-template-img-card"
                                            style="background-image: url('{{ url($template->defaultImage('image')) }}')">
                                        </div>
                                        <div class="campaign-template-content">
                                            <p>
                                            @if($template->email_type == 'Choose Design')
                                            <h4>
                                                
                                            @php
                                            if(isset($template->title)){
                                                $title_string = $template->title;
                                                $title = substr($title_string, 0, 50);
                                                echo @$title; 
                                                if(strlen($title_string) > 50){
                                                    echo "...";
                                                }
                                            }
                                             @endphp
                                            </h4>
                                            @php
                                            if(isset($template->content)){
                                                $content = strip_tags($template->content);
                                                $str = substr($content, 0, 94);
                                            }
                                            echo @$str; 
                                            if(strlen($content) > 94){
                                                echo "...";
                                            }
                                            @endphp
                                            </p>
                                            
                                            @else
                                            <h4>{{ @$template->customsubject }}</h4>
                                            <p><a class="viewButton" data-key="{{ @$template->getRouteKey() }}">Custom Template</a></p>
                                            @endif
                                            <div class="btn chooseButton" data-key="{{ @$template->getRouteKey() }}">Use Template</div>
                                        </div>
                                    </label>
                                    <div class="actions">
                                        <a class="btn viewButton" href="#" data-key="{{ @$template->getRouteKey() }}"><i class="fas fa-eye"></i></a>
                                        <a class="btn" href="{{ guard_url('groups/content-templates/' . $template->getRouteKey() . '/edit') }}"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn deleteButton" data-key="{{ @$template->getRouteKey() }}" href="#"><i class="fas fa-trash"></i></a>
                                    </div>
                                   
                                </div>
                                
                            </div>
                        @endforeach
                    @else
                        <p class="text-center text-bold">Templates Not Found</p>
                    @endif


                </div>
                @if (@$templates->isNotEmpty())
                <div class="row mt-20">
                    <div class="col-md-12">
                        
                            <div class="text-center">
                                {{ @$templates->links('restaurant::default.restaurant.partial.paginator') }}
                            </div>
                        
                    </div>
                </div>
                @endif
            </div>

            <div class="modal fade entry-modal" id="viewDesignModal" tabindex="-1" aria-labelledby="addAddonModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-capitalize" id="addAddonModalLabel">View Template</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="flaticon-cancel"></i></button>
                        </div>
                        <div class="modal-body" id="viewDesignModalData">
                           
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <div class="modal fade generate-template-modal" id="generateTemplateModal" tabindex="-1" aria-labelledby="add_GroupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" id="generateTemplateBody">
        </div>
    </div>

    <div class="modal fade generate-template-modal modal-fit-window" id="massScheduleModal" aria-labelledby="add_GroupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" id="massScheduleBody">
        </div>
    </div>

    <div class="modal fade entry-modal" id="viewTemplateModal" tabindex="-1" aria-labelledby="addAddonModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize" id="addAddonModalLabel">View Template</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="flaticon-cancel"></i></button>
                </div>
                <div class="modal-body" id="viewTemplateModalData">
                   
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade entry-modal" id="menuImageModal" tabindex="-1" aria-labelledby="menuImageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" id="menuImageModalBody">
        </div>
    </div>
    <div id="posterBatchContainer" style="position:absolute;left:-9999px;top:0;width:540px;min-height:600px;overflow:visible;"></div>








    <style>
        .dropzone {
            padding: 15px;
        }

        .upload-wraper .dropzone .dz-message {
            display: flex;
            height: 100%;
            margin: 0px 10px;
        }

        .upload-wraper .image-editor .img-box {
            margin: 0px;
            margin-right: 5px;
            margin-bottom: 10px;
        }

        .upload-wraper .dropzone {
            margin-right: 10px;
            margin-bottom: 10px;
        }
        
        #generateTemplateModal .modal-loading-overlay {
            display: none;
            position: absolute;
            inset: 0;
            background: rgba(255,255,255,0.85);
            z-index: 9999;
            border-radius: inherit;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 12px;
        }
        #generateTemplateModal .modal-loading-overlay.active {
            display: flex;
        }
    </style>
    <script>
          $('#mass_schedule').select2({
            allowClear: true,
            placeholder: {
                id: "-1",
                text: "Select an Title" //Should be text not placeholder
            }
        });
        $('.editButton').on("click", function(e) {
            e.preventDefault();
            var templateKey = $(this).attr('data-key');
            window.location.href = "{{ guard_url('groups/content-templates/') }}" + '/' + templateKey + '/edit';
        });
        $('.deleteButton').on("click", function(e) {
            e.preventDefault();
            var imgKey = $(this).attr('data-key');
            if (imgKey) {
                swal({
                    title: "Are you sure?",
                    text: "This will delete template.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {

                        $.ajax({
                            type: 'DELETE',
                            url: "{{ guard_url('groups/content-templates') }}" + '/' + imgKey,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(data) {
                                toastr.success('Template Deleted Successfully', 'Success');
                                window.location.reload();
                            }
                        });
                    } else {
                        return;
                    }
                });
            } else {
                toastr.error('Failed', 'Error');
            }
        });
        $('.chooseButton').on("click", function(e) {
            e.preventDefault();
            var templateKey = $(this).attr('data-key');
            if (templateKey) {
                swal({
                    title: "Are you sure?",
                    text: "This will create a campaign like this and will redirect to campaign page",
                    icon: "info",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {

                        $.ajax({
                            type: 'GET',
                            url: "{{ guard_url('groups/create-camp-template') }}" + '/' + templateKey,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(data) {
                                if(data['status'] == 'success'){
                                    window.location.href = "{{guard_url('groups/edit/schedule')}}/"+data['campaign_id'];
                                }
                                // toastr.success('Tempplate Deleted Successfully', 'Success');
                            }
                        });
                    } else {
                        return;
                    }
                });
            } else {
                toastr.error('Failed', 'Error');
            }
        });

        
        $(document).on('click','.viewButton',function(e){   
            e.preventDefault();
            e.stopImmediatePropagation();
            var templateKey = $(this).attr('data-key');
            $.get("{{ guard_url('groups/content-templates/view/') }}/" + templateKey, function(data) {
                if(data['status'] == 'false'){
                    toastr.warning(data['data'], 'Error');
                }else{
                    console.log(data);
                    $('#viewDesignModalData').html(data['html']);
                    $('#viewDesignModal').modal({show:true});
                }
            });
        }); 
        $('body').on('click', '.testMail', function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            var templateId = $(this).attr('data-key');
            var $f = $('#restaurant-mass-schedule-button');
            swal({
                text: 'Enter Email',
                content: "input",
                button: {
                    text: "Send Now",
                    closeModal: true,
                }
            })
            .then(email => {
                if(email == ""){
                    toastr.warning('Please Enter Email', 'Warning');
                    swal.stopLoading();
                    return false;
                }

                $.getJSON({
                type: 'POST',
                url: '{{ guard_url('groups/send-schedule-template') }}',
                data: $f.serialize()+ "&template_key=" + templateId+ "&email=" + email,
                success: function(data) {
                    if (data['status'] == 'fail') {
                        toastr.warning(data['data'], 'Error');
                        $('#testMailSpinner-'+templateId).hide();
                        $('#testMailButton-'+templateId).show();
                        return false;
                    } else {
                        toastr.success(data['data'], 'Success');
                        $('#testMailSpinner-'+templateId).hide();
                        $('#testMailButton-'+templateId).show();
                        // location.reload();
                    }
                },
                error: function(xhr, status, error) {
                    alert("ff");
                    return false;
                }
            });
        })
        .catch(err => {
        });
    }); 
    
        $(document).on('click','#massScheduleButton',function(e){   
            e.preventDefault();
            e.stopImmediatePropagation();
            $("#massScheduleSpinner").show();
            $("#massScheduleButton").hide();
            $("#massScheduleBody").html('');

            $.get("{{ guard_url('groups/mass-schedule-modal') }}", function (data) {
                if(data['status'] == "success"){
                    $("#massScheduleBody").html(data["html"]);
                    $("#massScheduleModal").modal("show");
                }else{
                    // $("#massScheduleModal").modal("hide");
                    toastr.warning(data['data'], 'Warning');

                }
                $("#massScheduleSpinner").hide();
                $("#massScheduleButton").show();
            });
        }); 

        $('body').on('click', '#previewHideButton', function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            $('#previewButton').removeClass('d-none');
            $('#previewHideButton').addClass('d-none');
            $('#templateWrap').removeClass('d-none');
            $('#templateWrap2').removeClass('d-none');
            $('#previewWrap').addClass('d-none');
        });
        $('body').on('click', '#hideButton', function(e) {
            var now = $(this).attr('data-value');
            if(now == 'email_google'){
                $('#previewWrap').removeClass('d-none');
                $('#templateWrap').hide();
                $('#templateWrap2').show();
                $(this).attr('data-value','facebook_instagram');
                document.getElementById("hideButton").innerHTML = "<i class='fas fa-eye mr-5'></i>Show Email & Google";
            }else if(now == 'facebook_instagram'){
                $('#previewWrap').removeClass('d-none');
                $('#templateWrap2').hide();
                $('#templateWrap').show();
                $(this).attr('data-value','email_google');
                document.getElementById("hideButton").innerHTML = "<i class='fas fa-eye mr-5'></i>Show Facebook & Instagram";
            }
        });
        $('body').on('click', '#previewButton', function(e) {
          
                // e.preventDefault();
                
               
                $('#previewButton').hide();
                $('#previewButtonSpinner').show();
                var $f = $('#restaurant-mass-schedule-button');

                // if (!$f.valid()) {
                //     $('#previewButtonSpinner').hide();
                //     $('#previewButton').show();
                //     return false;
                // }

                $.getJSON({
                    type: 'POST',
                    url: '{{ guard_url('groups/preview-mass-schedule') }}',
                    data: $f.serialize(),
                    success: function(data) {
                        if (data['status'] == 'fail') {
                            toastr.warning(data['data'], 'Error');
                            $('#previewButtonSpinner').hide();
                            $('#previewButton').show();
                            return false;
                        } else {
                            $('#previewButtonSpinner').hide();
                            $('#previewButton').show();
                            $('#previewWrap').html(data['html']);
                            $('#previewWrap').removeClass('d-none');
                            $('#templateWrap').addClass('d-none');
                            $('#templateWrap2').addClass('d-none');
                            $('#previewButton').addClass('d-none');
                            $('#previewHideButton').removeClass('d-none');
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Failed! Try again', 'Error');
                        $('#previewButtonSpinner').hide();
                        $('#previewButton').show();
                        return false;
                    }
                });
            });

        $('body').on('click', '#scheduleButton', function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();

            $('#scheduleButton').hide();
            $('#scheduleButtonSpinner').show();
            var $f = $('#restaurant-mass-schedule-button');

            // if (!$f.valid()) {
            //     $('#scheduleButtonSpinner').hide();
            //     $('#scheduleButton').show();
            //     return false;
            // }
            var restaurantName = "";

            $.get("{{ guard_url('groups/current-restaurant') }}", function (data) {
                if(data['status'] == "success"){
                    restaurantName =  data['name'];
                }
            }).done(function () {
                var span = document.createElement("span");
                span.innerHTML = "This will create Email, Google, Facebook, Instagram campaigns for <b style='font-weight:600;'>" + restaurantName + "</b>";
                swal({
                    title: "Please confirm restaurant ",  
                    content: span ,
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        $.getJSON({
                            type: 'POST',
                            url: '{{ guard_url('groups/mass-schedule') }}',
                            data: $f.serialize(),
                            success: function(data) {
                                if (data['status'] == 'fail') {
                                    toastr.error(data['data'], 'Error');
                                    $('#scheduleButtonSpinner').hide();
                                    $('#scheduleButton').show();
                                    return false;
                                } else {
                                    toastr.success(data['data'], 'Success');
                                    $('#scheduleButtonSpinner').hide();
                                    $('#scheduleButton').show();
                                    location.reload();
                                }
                            },
                            error: function(xhr, status, error) {
                                toastr.error(data['data'], 'Error');
                                $('#scheduleButtonSpinner').hide();
                                $('#scheduleButton').show();
                                return false;
                            }
                        });
                    } else {
                        $('#scheduleButtonSpinner').hide();
                        $('#scheduleButton').show();
                        return;
                    }
                });
            });
        }); 
        
        function formatPosterDesignLabel(key) {
            if (!key) return '—';
            var m = String(key).match(/^design(\d+)$/i);
            return m ? 'Design ' + m[1] : key;
        }
        window.syncPosterDesignInGenerateModal = function(menuId, formatId, posterDesign) {
            if (!menuId || !formatId || !posterDesign) return;
            var $opt = $('#generateTemplateBody select[name="toprated[' + menuId + '][format]"] option[value="' + formatId + '"]');
            if ($opt.length) {
                $opt.attr('data-poster-design', posterDesign);
                if (typeof $opt.removeData === 'function') {
                    $opt.removeData('posterDesign');
                }
            }
            if (typeof window.refreshPosterDesignLabels === 'function') {
                window.refreshPosterDesignLabels($('#generateTemplateBody'));
            }
        };
        window.refreshPosterDesignLabels = function($container) {
            if (!$container || !$container.length) return;
            $container.find('.template-menu-item').each(function() {
                var $row = $(this);
                var $opt = $row.find('select[name$="[format]"] option:selected');
                var pd = $opt.data('posterDesign');
                if (pd === undefined) {
                    pd = $opt.attr('data-poster-design');
                }
                if (!pd) pd = 'design1';
                $row.find('.poster-design-display').text(formatPosterDesignLabel(pd));
            });
        };
        $(document).on('change', '#generateTemplateBody select[name$="[format]"]', function() {
            var $row = $(this).closest('.template-menu-item');
            var $opt = $(this).find('option:selected');
            var pd = $opt.data('posterDesign');
            if (pd === undefined) {
                pd = $opt.attr('data-poster-design');
            }
            if (!pd) pd = 'design1';
            $row.find('.poster-design-display').text(formatPosterDesignLabel(pd));
        });

        $(document).on('click','#generateTemplate',function(e){   
            e.preventDefault();
            e.stopImmediatePropagation();
            $("#generateTemplateSpinner").show();
            $("#generateTemplate").hide();
            $("#generateTemplateModal").modal("show");
            $("#generateTemplateBody").html('');

            $.get("{{ guard_url('groups/generate-templates-modal') }}", function (data) {
                if(data['status'] == "success"){
                    $("#generateTemplateBody").html(data["html"]);
                    if (typeof window.refreshPosterDesignLabels === 'function') {
                        window.refreshPosterDesignLabels($('#generateTemplateBody'));
                    }
                }else{
                    $("#generateTemplateModal").modal("hide");
                    toastr.warning(data['data'], 'Warning');

                }
                $("#generateTemplateSpinner").hide();
                $("#generateTemplate").show();
            });
        }); 
        var posterUploadUrl = "{{ guard_url('groups/poster-upload-template') }}";
        var menuImageModalBaseUrl = "{{ guard_url('groups/menu-image-modal') }}";

        
        $(document).on('click','#generateButton',function(e){   
            e.preventDefault();
            e.stopImmediatePropagation();
            
            $('#generateButton').hide();
            $('#generateButtonSpinner').show();
            var $f = $('#restaurant-generate-button');

            if (!$f.valid()) {
                $('#generateButtonSpinner').hide();
                $('#generateButton').show();
                return false;
            }
            swal({
                    title: "Are you sure?",
                    text: "This will create templates and upload posters for all selected menus!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        var checkedRows = [];
                        $('#generateTemplateBody input[name^="toprated"][name$="[is_checked]"]:checked').each(function(){
                            var name = $(this).attr('name');
                            var m = name.match(/toprated\[([^\]]+)\]\[is_checked\]/);
                            if (m && m[1]) {
                                var menuId = m[1];
                                var $row = $(this).closest('.template-menu-item');
                                var $formatSel = $row.find('select[name="toprated['+menuId+'][format]"]');
                                var formatId = $formatSel.val();
                                var design = $row.find('select[name="toprated['+menuId+'][template]"]').val();
                                var $fmtOpt = $formatSel.find('option:selected');
                                var posterDesign = ($fmtOpt.data('posterDesign') || $fmtOpt.attr('data-poster-design') || 'design1');
                                if (formatId && design) {
                                    checkedRows.push({ menuId: menuId, formatId: formatId, design: design, posterDesign: posterDesign });

                                }
                            }
                        });

                        function runGenerateTemplates(serializedData, onSuccess) {
                            $('#generateTemplateBody select').prop('disabled', false);
                            var formData = serializedData || $f.serialize();
                            $('#generateTemplateBody select').prop('disabled', true);
                            $.ajax({
                                type: 'POST',
                                url: '{{ guard_url('groups/generate-templates') }}',
                                data: formData,
                                dataType: 'json',
                                success: function(data) {
                                    if (data['status'] == 'fail') {
                                        toastr.error(data['data'], 'Error');
                                        $('.error-message').each(function(i){ $(this).empty(); });
                                        if(data['menu_id']) $('#errorMessage-'+data['menu_id']).html('<br><b style="color:red;">Same Template Exists!</b>');
                                        if (typeof onSuccess === 'function') {
                                            $('#generateButtonSpinner').hide();
                                            $('#generateButton').show();
                                             setGenerateModalLoading(false);
                                            onSuccess(false);
                                        }
                                    } else {
                                        $('.error-message').each(function(i){ $(this).empty(); });
                                        if (typeof onSuccess === 'function') {
                                            onSuccess(true);
                                        } else {
                                            toastr.success(data['data'], 'Success');
                                            location.reload();
                                        }
                                    }
                                },
                                error: function() {
                                    toastr.error('Failed! Try again', 'Error');
                                    if (typeof onSuccess === 'function') {
                                        $('#generateButtonSpinner').hide();
                                        $('#generateButton').show();
                                          setGenerateModalLoading(false);
                                        onSuccess(false);
                                    }
                                },
                                complete: function() {
                                    if (typeof onSuccess !== 'function') {
                                        $('#generateButtonSpinner').hide();
                                        $('#generateButton').show();
                                    }
                                }
                            });
                        }

                        if (checkedRows.length === 0) {
                            runGenerateTemplates();
                            return;
                        }

                        function loadScript(src) {
                            return new Promise(function(resolve, reject) {
                                if (window.html2canvas) { resolve(); return; }
                                var s = document.createElement('script');
                                s.src = src;
                                s.onload = function() { resolve(); };
                                s.onerror = function() { reject(new Error('Could not load the image converter (html2canvas).')); };
                                document.head.appendChild(s);
                            });
                        }

                        function showPosterGenerationFailed(msg) {
                            var text = msg || 'Poster generation failed.';
                            if (typeof swal === 'function') {
                                swal({ title: 'Poster generation failed', text: text, icon: 'error' });
                            }
                            if (typeof toastr !== 'undefined') {
                                toastr.error(text, 'Error');
                            }
                        }

                        function captureAndUploadPoster(row, index, total) {
                            return new Promise(function(resolve, reject) {
                                var url = menuImageModalBaseUrl + '/' + row.menuId + '?format_id=' + encodeURIComponent(row.formatId);
                                var $cont = $('#posterBatchContainer');
                        
                                console.log('=== captureAndUploadPoster START ===');
                                console.log('menuId:', row.menuId, 'formatId:', row.formatId, 'posterDesign:', row.posterDesign);
                                console.log('url:', url);
                        
                                $.get(url).then(function(data) {
                                    console.log('=== menuImageModal response ===');
                                    console.log('status:', data.status);
                                    console.log('html present:', !!data.html);
                                    console.log('html length:', data.html ? data.html.length : 0);
                        
                                    if (data.status !== 'success' || !data.html) {
                                        $cont.empty();
                                        reject(new Error('Could not load poster HTML for this menu. Please try the menu image setup again.'));
                                        return;
                                    }
                        
                                    $cont.html(data.html);
                        
                                    var posterDesignKey = row.posterDesign || 'design1';
                                    var designNum = posterDesignKey.replace('design', '');
                        
                                    console.log('=== Design selection ===');
                                    console.log('posterDesignKey:', posterDesignKey, 'designNum:', designNum);
                        
                                    $cont.find('[id^="template-design"]').hide();
                                    var $designDiv = $cont.find('#template-design' + designNum);
                        
                                    console.log('$designDiv found:', $designDiv.length);
                        
                                    if ($designDiv.length) $designDiv.show();
                        
                                    var card = $cont[0].querySelector('#posterCard' + designNum) || $cont.find('.card')[0];
                        
                                    console.log('=== Card element ===');
                                    console.log('card found:', !!card);
                                    console.log('card id tried: #posterCard' + designNum);
                                    console.log('card offsetWidth:', card ? card.offsetWidth : 'N/A');
                                    console.log('card offsetHeight:', card ? card.offsetHeight : 'N/A');
                                    console.log('html2canvas available:', typeof html2canvas !== 'undefined');
                        
                                    if (!card || typeof html2canvas === 'undefined') {
                                        $cont.empty();
                                        reject(new Error('Poster layout could not be found or the image converter is unavailable.'));
                                        return;
                                    }
                        
                                    setTimeout(function() {
                                        var exportW = 1080;

                                        function measureCardBox() {
                                            var cr = card.getBoundingClientRect();
                                            var w = Math.round(cr.width || card.offsetWidth || card.clientWidth || 0);
                                            var h = Math.round(Math.max(
                                                cr.height || 0,
                                                card.offsetHeight || 0,
                                                card.scrollHeight || 0,
                                                card.clientHeight || 0
                                            ));
                                            if (w < 200 || w > 2000) w = 340;
                                            if (h < 200 || h > 4000) h = Math.round(w * 1.25);
                                            // Small slack so html2canvas does not clip the last row of text / footer.
                                            h = Math.min(4000, h + 8);
                                            return { w: w, h: h };
                                        }

                                        function flatPosterNodes(root) {
                                            if (!root) return [];
                                            return [root].concat(Array.prototype.slice.call(root.querySelectorAll('*')));
                                        }

                                        function syncPosterTypographyFromLive(liveRoot, cloneRoot) {
                                            if (!liveRoot || !cloneRoot) return;
                                            var liveEls = flatPosterNodes(liveRoot);
                                            var cloneEls = flatPosterNodes(cloneRoot);
                                            var n = Math.min(liveEls.length, cloneEls.length);
                                            if (liveEls.length !== cloneEls.length) {
                                                console.warn('poster typography sync: node count mismatch', liveEls.length, cloneEls.length);
                                            }
                                            for (var i = 0; i < n; i++) {
                                                if (liveEls[i].tagName !== cloneEls[i].tagName) {
                                                    continue;
                                                }
                                                var cs = window.getComputedStyle(liveEls[i]);
                                                var ts = cloneEls[i].style;
                                                ts.fontFamily = cs.fontFamily;
                                                ts.fontSize = cs.fontSize;
                                                ts.fontWeight = cs.fontWeight;
                                                ts.fontStyle = cs.fontStyle;
                                                ts.letterSpacing = cs.letterSpacing;
                                                ts.lineHeight = cs.lineHeight;
                                                ts.textTransform = cs.textTransform;
                                                ts.fontFeatureSettings = cs.fontFeatureSettings;
                                                ts.fontVariantNumeric = cs.fontVariantNumeric;
                                                ts.color = cs.color;
                                                if (cs.webkitTextSizeAdjust && cs.webkitTextSizeAdjust !== 'auto') {
                                                    ts.webkitTextSizeAdjust = cs.webkitTextSizeAdjust;
                                                }
                                            }
                                        }

                                        var fontsP = (document.fonts && document.fonts.ready) ? document.fonts.ready : Promise.resolve();
                                        if (fontsP && typeof fontsP.catch === 'function') {
                                            fontsP = fontsP.catch(function() {});
                                        }

                                        fontsP.then(function() {
                                            var box = measureCardBox();
                                            var cw = box.w;
                                            var ch = box.h;

                                            console.log('=== html2canvas START ===', 'cardBox:', cw, 'x', ch);

                                            // html2canvas defaults windowWidth/Height to the full browser viewport.
                                            // That breaks vw/clamp vs a ~340px poster — force the card's box (keeps type correct).
                                            // Use native scale = exportW / cardWidth so the canvas is ~1080px wide (sharp),
                                            // instead of scale 1 + drawImage upscale (very soft).
                                            var pixelScale = exportW / Math.max(cw, 1);
                                            if (pixelScale < 1) pixelScale = 1;
                                            if (pixelScale > 6) pixelScale = 6;

                                            var POSTER_DESIGN_CONFIG = {
                                                '1': { backgroundColor: null,      allowTaint: true,  imageTimeout: 0     },
                                                '2': { backgroundColor: null,      allowTaint: true,  imageTimeout: 0     },
                                                '3': { backgroundColor: '#ffffff', allowTaint: false, imageTimeout: 15000 },
                                                '4': { backgroundColor: null,      allowTaint: false, imageTimeout: 15000 },
                                            };
                                            var DEFAULT_DESIGN_CONFIG = { backgroundColor: null, allowTaint: true, imageTimeout: 0 };

                                            var h2cOpts = {
                                                scale: pixelScale,
                                                logging: false,
                                                useCORS: true,
                                                windowWidth: cw,
                                                windowHeight: ch,
                                                scrollX: 0,
                                                scrollY: 0,
                                                onclone: function(clonedDoc) {
                                                    console.log('=== onclone fired ===');

                                                    var vp = clonedDoc.createElement('meta');
                                                    vp.name = 'viewport';
                                                    vp.content = 'width=' + cw + ', initial-scale=1';
                                                    clonedDoc.head.insertBefore(vp, clonedDoc.head.firstChild);

                                                    var injectedStyles = document.querySelectorAll('#posterBatchContainer style');
                                                    injectedStyles.forEach(function(styleEl) {
                                                        var clonedStyle = clonedDoc.createElement('style');
                                                        clonedStyle.textContent = styleEl.textContent;
                                                        clonedDoc.head.appendChild(clonedStyle);
                                                    });

                                                    document.querySelectorAll('#posterBatchContainer link[rel="stylesheet"], #posterBatchContainer link[rel="preconnect"]').forEach(function(linkEl) {
                                                        var href = linkEl.getAttribute('href');
                                                        if (!href) return;
                                                        var dup = clonedDoc.createElement('link');
                                                        dup.rel = linkEl.rel;
                                                        dup.href = href;
                                                        var cro = linkEl.getAttribute('crossorigin');
                                                        if (cro) dup.setAttribute('crossorigin', cro);
                                                        clonedDoc.head.appendChild(dup);
                                                    });

                                                    var clonedCard = clonedDoc.getElementById('posterCard' + designNum);
                                                    if (clonedCard && clonedCard.parentNode) {
                                                        var wrap = clonedDoc.createElement('div');
                                                        wrap.className = 'design' + designNum + '-wrapper';
                                                        clonedCard.parentNode.insertBefore(wrap, clonedCard);
                                                        wrap.appendChild(clonedCard);
                                                    }

                                                    syncPosterTypographyFromLive(card, clonedDoc.getElementById('posterCard' + designNum));

                                                    if (clonedCard) {
                                                        var computedBg = window.getComputedStyle(card).backgroundColor;
                                                        if (computedBg && computedBg !== 'rgba(0, 0, 0, 0)') {
                                                            clonedCard.style.backgroundColor = computedBg;
                                                        }
                                                    }

                                                    var imgPromises = Array.from(clonedDoc.querySelectorAll('img')).map(function(img) {
                                                        return new Promise(function(resolve) {
                                                            if (img.complete) { resolve(); }
                                                            else { img.onload = resolve; img.onerror = resolve; }
                                                        });
                                                    });

                                                    var bgDivPromises = Array.from(clonedDoc.querySelectorAll('.d4-menu-img-bg')).map(function(div) {
                                                        return new Promise(function(resolve) {
                                                            var style = div.style.backgroundImage || window.getComputedStyle(div).backgroundImage;
                                                            var match = style && style.match(/url\(["']?([^"')]+)["']?\)/);
                                                            if (!match) { resolve(); return; }
                                                            var src = match[1];
                                                            var img = clonedDoc.createElement('img');
                                                            img.style.cssText = 'width:100%;height:100%;object-fit:cover;object-position:center;display:block;border-radius:0 0 10px 10px;';
                                                            img.onload  = function() { resolve(); };
                                                            img.onerror = function() { resolve(); };
                                                            img.src = src;
                                                            div.innerHTML = '';
                                                            div.appendChild(img);
                                                        });
                                                    });

                                                    return Promise.all(imgPromises.concat(bgDivPromises));
                                                }
                                            };

                                            Object.assign(h2cOpts, POSTER_DESIGN_CONFIG[designNum] || DEFAULT_DESIGN_CONFIG);
                                            h2cOpts.scale = pixelScale;
                                            h2cOpts.windowWidth = cw;
                                            h2cOpts.windowHeight = ch;
                                            h2cOpts.scrollX = 0;
                                            h2cOpts.scrollY = 0;

                                            return html2canvas(card, h2cOpts);
                                        }).then(function(canvas) {
                                            console.log('=== html2canvas DONE ===');
                                            console.log('canvas:', canvas ? canvas.width : null, 'x', canvas ? canvas.height : null);

                                            if (!canvas || canvas.width < 1 || canvas.height < 1) {
                                                $cont.empty();
                                                reject(new Error('The poster could not be captured as an image (empty canvas).'));
                                                return;
                                            }

                                            var dataUrl;
                                            try {
                                                dataUrl = canvas.toDataURL('image/png', 1.0);
                                            } catch (e) {
                                                console.error('=== toDataURL FAILED ===', e);
                                                $cont.empty();
                                                reject(new Error('The poster image could not be exported (try different images or disable cross-origin restrictions).'));
                                                return;
                                            }

                                            if (!dataUrl || dataUrl.length < 200) {
                                                console.error('dataUrl too short or empty!');
                                                $cont.empty();
                                                reject(new Error('The poster image data was invalid after capture.'));
                                                return;
                                            }

                                            console.log('✅ Poster capture SUCCESS for menuId:', row.menuId);
                                            $cont.empty();
                                            resolve(dataUrl);

                                        }).catch(function(err) {
                                            console.error('=== html2canvas CATCH ERROR ===', err);
                                            $cont.empty();
                                            reject(new Error('Could not convert the poster HTML to an image.'));
                                        });

                                    }, 800);

                        
                                }).fail(function(xhr) {
                                    console.error('=== $.get FAILED ===');
                                    console.error('status:', xhr.status, 'responseText:', xhr.responseText);
                                    $cont.empty();
                                    reject(new Error('Could not load poster content from the server.'));
                                });
                            });
                        }

                        loadScript('https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js').then(function() {
                             setGenerateModalLoading(true);
                            var postersByMenu = {};
                            var seq = Promise.resolve();
                            checkedRows.forEach(function(row, i) {
                                seq = seq.then(function() {
                                    if (toastr && checkedRows.length > 1) toastr.info('Poster ' + (i+1) + ' of ' + checkedRows.length, null, { timeOut: 800 });
                                    return captureAndUploadPoster(row, i, checkedRows.length).then(function(dataUrl) {
                                        postersByMenu[row.menuId] = dataUrl;
                                    });
                                });
                            });
                            seq.then(function() {
                                var formArray = $f.serializeArray();
                                checkedRows.forEach(function(row, i) {
                                    var dataUrl = postersByMenu[row.menuId];
                                    if (dataUrl) {
                                        formArray.push({ name: 'toprated[' + row.menuId + '][poster_image]', value: dataUrl });
                                    }
                                });
                                runGenerateTemplates($.param(formArray), function(success) {
                                    setGenerateModalLoading(false);
                                    if (!success) return;
                                    toastr.success('Templates and posters ready.', 'Success');
                                    location.reload();
                                });
                            }).catch(function(err) {
                                setGenerateModalLoading(false);
                                $('#generateButtonSpinner').hide();
                                $('#generateButton').show();
                                showPosterGenerationFailed(err && err.message ? err.message : '');
                            });
                        }).catch(function(err) {
                            $('#generateButtonSpinner').hide();
                            $('#generateButton').show();
                            showPosterGenerationFailed(err && err.message ? err.message : 'Could not load poster tools.');
                        });
                    } else {
                        $('#generateButtonSpinner').hide();
                        $('#generateButton').show();
                    }
                });
         
        }); 
        
        // $(document).on('click','.info-icon',function(e){   
        $(document).on('click','.menuViewButton',function(e){  
            e.preventDefault();
            e.stopImmediatePropagation();
            var menuId = $(this).data('menu-id');
            var $f = $('#restaurant-generate-button');
            $('#menuView-'+menuId).hide();
            $('#menuSpinner-'+menuId).show();

            if($("#customCheck"+menuId).prop('checked') == false){
                toastr.warning('Please select this menu Item to View', 'Warning');
                $('#menuView-'+menuId).show();
                $('#menuSpinner-'+menuId).hide();
                return false;
            }
            $.getJSON({
                type: 'POST',
                url: '{{ guard_url('groups/view-generate-template') }}',
                data: $f.serialize()+ "&menu_id=" + menuId,
                success: function(data) {
                    if (data['status'] == 'fail') {
                        toastr.error(data['data'], 'Error');
                        $('#menuView-'+menuId).show();
                        $('#menuSpinner-'+menuId).hide();
                        return false;
                    } else {
                        $('#viewTemplateModalData').html(data['html']);
                        $('#viewTemplateModal').modal('show');

                        $('#menuView-'+menuId).show();
                        $('#menuSpinner-'+menuId).hide();
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error('Something went wrong! Try again', 'Error');
                    $('#menuView-'+menuId).show();
                    $('#menuSpinner-'+menuId).hide();
                    return false;
                }
            });
        }); 
        $(document).on('click','.menuImageButton',function(e){   
            e.preventDefault();
            e.stopImmediatePropagation();
            var menuId = $(this).data('menu-id');
            if(!menuId){
                toastr.warning('Menu not found', 'Warning');
                return false;
            }
            var formatId = $('select[name="toprated['+menuId+'][format]"]').val() || '';
            var url = "{{ guard_url('groups/menu-image-modal') }}/" + menuId;
            if (formatId) { url += '?format_id=' + encodeURIComponent(formatId); }
            $('#menuImageSpinner-'+menuId).show();
            $('#menuImage-'+menuId).hide();
            $('#menuImageModalBody').html('');
            $.get(url, function (data) {
                if(data['status'] == "success"){
                    $("#menuImageModalBody").html(data["html"]);
                    $("#menuImageModal").modal("show");
                    loadProcessedMenuImage(menuId);
                }else{
                    toastr.warning(data['data'], 'Warning');
                }
                $('#menuImageSpinner-'+menuId).hide();
                $('#menuImage-'+menuId).show();
            });
        });  
        function loadProcessedMenuImage(menuId){
            if(!menuId){
                return;
            }
            $('#menuImageProcessedEmpty').text('Processing image...');
            $('#menuImageProcessedPreview').addClass('d-none');
            $.get("{{ guard_url('groups/menu-image-process') }}/" + menuId, function (data) {
                if(data['status'] == "success" && data['image_url']){
                    $('#menuImageProcessedPreview').attr('src', data['image_url']).removeClass('d-none');
                    $('#menuImageProcessedEmpty').addClass('d-none');
                }else{
                    $('#menuImageProcessedEmpty').text(data['data'] || 'Processed image not available');
                }
            });
        }
        $('body').on('submit', '#menu-image-form', function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            var $form = $(this);
            $('#menuImageSaveSpinner').show();
            $('#menuImageSaveButton').hide();
            $.ajax({
                type: 'POST',
                url: $form.attr('action'),
                data: $form.serialize(),
                dataType: 'json',
                success: function(data) {
                    if(data['status'] == 'success'){
                        toastr.success(data['data'], 'Success');
                        if (data['image_url'] && typeof window.updateMenuImagePreviewsInMenuModal === 'function') {
                            window.updateMenuImagePreviewsInMenuModal(data['image_url']);
                        } else if (data['image_url']) {
                            $('#menuImagePreview').attr('src', data['image_url']).removeClass('d-none');
                            $('#menuImageEmpty').addClass('d-none');
                        }
                        var menuId = $form.find('input[name="menu_id"]').val();
                        var formatId = $form.find('input[name="format_id"]').val();
                        if (data && data['poster_design'] && typeof window.syncPosterDesignInGenerateModal === 'function') {
                            window.syncPosterDesignInGenerateModal(menuId, formatId, data['poster_design']);
                        }
                        loadProcessedMenuImage(menuId);
                        $('#menuImageModal').modal('hide');
                    }
                },
                error: function() {
                    // toastr.error('Failed! Try again', 'Error');
                },
                complete: function() {
                    $('#menuImageSaveSpinner').hide();
                    $('#menuImageSaveButton').show();
                    $('#menuImageModal').modal('hide');
                }
            });
        });
        
        
        function enableVariation(element, menuId) {
            var checked = element && element.checked === true;
            var $row = element ? $(element).closest('.template-menu-item') : null;
            if ($row && $row.length) {
                $row.find('select[name="toprated[' + menuId + '][template]"]').prop('disabled', !checked);
                $row.find('select[name="toprated[' + menuId + '][format]"]').prop('disabled', !checked);
                $row.find('.menuImageButton').prop('disabled', !checked);
            }
        }
        $(document).on('change', '#generateTemplateBody input[name^="toprated"][name$="[is_checked]"]', function() {
            var name = $(this).attr('name');
            var m = name.match(/toprated\[([^\]]+)\]\[is_checked\]/);
            if (m && m[1]) enableVariation(this, m[1]);
        });

        $(document).on('hidden.bs.modal', '#menuImageModal', function() {
            if (window.__menuImageDropzoneInterval) {
                clearInterval(window.__menuImageDropzoneInterval);
                window.__menuImageDropzoneInterval = null;
            }
            $('#menuImageModalBody').empty();
        });
        
        
        function setGenerateModalLoading(isLoading) {
            var $modal = $('#generateTemplateModal');
            var $overlay = $modal.find('.modal-loading-overlay');
        
            if (isLoading) {
                if (!$overlay.length) {
                    $modal.find('.modal-dialog').css('position', 'relative').prepend(
                        '<div class="modal-loading-overlay">' +
                            '<div class="spinner-border text-dark" role="status" style="width:2.5rem;height:2.5rem;"></div>' +
                            '<span style="font-size:14px;color:#333;text-align:center;">Generating templates, please wait...<br>Please don\'t refresh, close, or press the back button.</span>' +
                        '</div>'
                    );
                    $overlay = $modal.find('.modal-loading-overlay');
                }
                $overlay.addClass('active');
                $modal.data('bs.modal')._config.backdrop = 'static';
                $modal.data('bs.modal')._config.keyboard = false;
                $modal.find('[data-dismiss="modal"], .close').prop('disabled', true).css('pointer-events', 'none');
            } else {
                $overlay.removeClass('active');
                if ($modal.data('bs.modal')) {
                    $modal.data('bs.modal')._config.backdrop = true;
                    $modal.data('bs.modal')._config.keyboard = true;
                }
                $modal.find('[data-dismiss="modal"], .close').prop('disabled', false).css('pointer-events', '');
            }
        }



    </script>
    <style>
        @media only screen and (max-width: 600px) {
            .app-wrap .app-content-wrap .app-content-inner .app-entry-form-wrap {
                padding-top: 115px;
            }
            .app-wrap .app-content-wrap .app-entry-form-wrap .app-sec-title.actions-mobile-bottom {
                padding-bottom: 110px;
            }
        }

    </style>

