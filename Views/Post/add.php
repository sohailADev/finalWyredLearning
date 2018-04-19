<?php
/**
 * Created by PhpStorm.
 * User: sohail
 * Date: 2/6/2018
 * Time: 3:01 PM
 */


require APPROOT.'/Views/PartialViews/header.php' ?>


  
<header id="main-header" class="py-1 text-white" style="background-color:#3bafda;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>
                    <i class="fa fa-plus-circle"></i> Add Post
                </h1>
            </div>
        </div>
    </div>
</header>

<!-- ACTIONS -->
<section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mr-auto">
                <a href="<?php echo URLROOT; ?>" class="btn btn-light btn-block">
                    <i class="fa fa-arrow-left"></i> Back To Dashboard
                </a>
            </div>
        
        
        </div>
    </div>
</section>

<!-- POSTS -->
<section id="posts" style="margin-bottom:20em;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Post</h4>
                    </div>
                    <div class="card-body">
                        <form id="addPostForm"  enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" class="form-control <?php echo (!empty($data['postTitleError'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['postTitle'] ; ?>" name="postTitle">
                                <span class="invalid-feedback"><?php echo $data['postTitleError']?>
                                </span>
							</div>
                            <div class="form-group">
                                <label for="title">Post Category</label>
                                <select class="form-control" name="postCategory">
                                    <option value="">Web Development</option>
                                    <option value="">Data base</option>
                                    <option value="">Front End development</option>
                                    <option value="">Marketing</option>
                                    <option value="">Designing</option>
                                    <option value="">DevOps</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="file">Feature Image</label>
                                <input type="file" class="form-control-file <?php echo (!empty($data['postImageError'])) ? 'is-invalid' : '' ?>" name="postImage">
                                <small class="form-text text-muted">Max Size 10mb</small>
                                <span class="invalid-feedback"><?php echo $data['postImageError']?>
                                </span>
                            </div>
                          
                            <div class="form-group" >
                                <label for="body">Post Content</label>
                                <textarea id="summernote" name="postContent" class="form-control <?php echo (!empty($data['postContentError'])) ? 'is-invalid' : '' ?>"></textarea>
                                <span class="invalid-feedback"><?php echo $data['postContentError']?>
                                </span>
                            </div>


                            <input type="submit" style="width:10em" name="submit" class="btn btn-success " value="  Submit " />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

          






<?php require APPROOT.'/Views/PartialViews/footer.php' ?>
