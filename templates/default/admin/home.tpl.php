<div class="row">

    <div class="col-md-10 col-md-offset-1">
        <?= $this->draw('admin/menu') ?>
        <?= $this->draw('admin/home/description')?>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
	    
        <form action="<?= \Idno\Core\site()->config()->getDisplayURL() ?>admin/" class="navbar-form admin" method="post">

            <div class="row">
                <div class="col-md-2">
                    <p><label class="control-label" for="name"><strong>Site name</strong></label></p>
                </div>
                <div class="col-md-4">
                    <input type="text" id="name" placeholder="Site name" class="input col-md-4 form-control" name="title"
                           value="<?= htmlspecialchars(\Idno\Core\site()->config()->title) ?>">
                </div>
                <div class="col-md-6">
                    <p class="config-desc">Give your site a name!</p>
                </div>
            </div>

            <!-------->

            <div class="row">
                <div class="col-md-2">
                    <p><label class="control-label" for="description"><strong>Site description</strong></label></p>
                </div>
                <div class="col-md-4">
                    <input type="text" id="name" placeholder="Site description" class="input col-md-4 form-control" name="description"
                           value="<?= htmlspecialchars(\Idno\Core\site()->config()->description) ?>">
                </div>
                <div class="col-md-6">
                    <p class="config-desc">You might want to add a short tagline for your site.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p><label class="control-label" for="open_registration"><strong>Allow registration</strong></label></p>
                </div>
                <div class="config-toggle col-md-4">
                    <input type="checkbox" data-toggle="toggle" data-onstyle="info" data-on="Yes" data-off="No"
                           name="open_registration"
                           value="true" <?php if (\Idno\Core\site()->config()->open_registration == true) echo 'checked'; ?>>
                </div>
                <div class="col-md-6">
                    <p class="config-desc">Allow registration if you want others to sign up for your site.</p>
                </div>
            </div>

            <?php

                if (\Idno\Core\site()->config()->walled_garden == true || \Idno\Core\site()->config()->canMakeSitePrivate()) {

                    ?>
                    <!---------->
                    <div class="row">
                        <div class="col-md-2">
                            <p><label class="control-label" for="open_registration"><strong>Make site
                                        private</strong></label></p>
                        </div>
                        <div class="config-toggle col-md-4">
                            <input type="checkbox" data-toggle="toggle" data-onstyle="info" data-on="Yes" data-off="No"
                                   name="walled_garden"
                                   value="true" <?php if (\Idno\Core\site()->config()->walled_garden == true) echo 'checked'; ?>>
                        </div>
                        <div class="col-md-6"><p class="config-desc">Content on a private site is only visible if you're
                                logged in.</p>
                        </div>
                    </div>
                <?php

                }

            ?>

            <!---------->

            <div class="row">
                <div class="col-md-2">
                    <p><label class="control-label" for="hub"><strong>PubSubHubbub hub</strong></label></p>
                </div>
                <div class="col-md-4">
                    <input type="url" id="hub" placeholder="PubSubHubbub hub address" class="input col-md-4 form-control" name="hub"
                           value="<?= htmlspecialchars(\Idno\Core\site()->config()->hub) ?>">
                </div>
                <div class="col-md-6">
                    <p class="config-desc">You can probably leave this as is.
                        Learn more about
                        <a href="https://code.google.com/p/pubsubhubbub/" target="_blank">PuSH</a>.

                    </p>
                </div>
            </div>

            <!----------->

            <div class="row">
                <div class="col-md-2">
                    <p><label class="control-label" for="items_per_page"><strong>Items per page</strong></label></p>
                </div>
                <div class="col-md-4">
                    <input type="text" id="items_per_page" placeholder="10" class="input col-md-4 form-control" name="items_per_page"
                           value="<?= htmlspecialchars(\Idno\Core\site()->config()->items_per_page) ?>">
                </div>
                <div class="col-md-6"><p class="config-desc">This is the number of content posts displayed on each page.</p>
                </div>
            </div>

            <!----------->

            <div class="row">
                <div class="col-md-2">
                    <p><label class="control-label" for="user_avatar_favicons"><strong>Avatar as icon</strong></label>
                    </p>
                </div>
                <div class="config-toggle col-md-4">
                    <input type="checkbox" data-toggle="toggle" data-onstyle="info" data-on="Yes" data-off="No"
                           value="true"
                           name="user_avatar_favicons" <?php if (\Idno\Core\site()->config()->user_avatar_favicons == true) echo 'checked'; ?>>
                </div>
                <div class="col-md-6"><p class="config-desc">
                        This uses members' avatar images as the site favicon.
                    </p>
                </div>
            </div>

            <!---------->
            <div class="row">
                <div class="col-md-2">
                    <p><label class="control-label" for="items_per_page"><strong>Include permalinks</strong></label></p>
                </div>
                <div class="config-toggle col-md-4">
                    <input type="checkbox" data-toggle="toggle" data-onstyle="info" data-on="Yes" data-off="No"
                           name="indieweb_reference"
                           value="true" <?php if (\Idno\Core\site()->config()->indieweb_reference == true) echo 'checked'; ?>>
                </div>
                <div class="col-md-6"><p class="config-desc">Add a permalink to the original content when you
                        cross-post.</p>
                </div>
            </div>

            <!---------->

            <?=$this->draw('admin/home/settings')?>


                <div class="controls-save">
                    <button type="submit" class="btn btn-primary">Save updates</button>
                </div>

            <?= \Idno\Core\site()->actions()->signForm('/admin/') ?>

            <?=$this->draw('admin/home/footer/settings')?>

        </form>
    </div>

</div>


