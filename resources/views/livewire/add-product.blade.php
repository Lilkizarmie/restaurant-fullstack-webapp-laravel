    <div class="ps-main__wrapper">
        <header class="header--dashboard">
            <div class="header__left">
                <h3>New Product</h3>
                <p>Add new product</p>
            </div>
            <div class="header__center">
                <form class="ps-form--search-bar" action="index.html" method="get">
                    <input class="form-control" type="text" placeholder="Search something">
                    <button><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="header__right"><a class="header__site-link" href="#"><span>View your store</span><i class="icon-exit-right"></i></a></div>
        </header>
        <section class="ps-new-item">
            <form class="ps-form ps-form--new-product" action="index.html" method="get">
                <div class="ps-form__content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <figure class="ps-block--form-box">
                                <figcaption>General</figcaption>
                                <div class="ps-block__content">
                                    <div class="form-group">
                                        <label>Product Name<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="Enter product name...">
                                    </div>
                                    <div class="form-group">
                                        <label>Reference<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="Enter product Reference...">
                                    </div>
                                    <div class="form-group">
                                        <label>Product Summary<sup>*</sup>
                                        </label>
                                        <textarea class="form-control" rows="6" placeholder="Enter product description..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Regular Price<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Sale Price<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Sale Quantity<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Sold Items<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Product Description<sup>*</sup></label>
                                        <textarea id="summernote" rows="6" name="editordata"></textarea>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <figure class="ps-block--form-box">
                                <figcaption>Product Images</figcaption>
                                <div class="ps-block__content">
                                    <div class="form-group">
                                        <label>Product Thumbnail</label>
                                        <div class="form-group--nest">
                                            <input class="form-control mb-1" type="text" placeholder="">
                                            <button class="ps-btn ps-btn--sm">Choose</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Gallery</label>
                                        <div class="form-group--nest">
                                            <input class="form-control mb-1" type="text" placeholder="">
                                            <button class="ps-btn ps-btn--sm">Choose</button>
                                        </div>
                                    </div>
                                    <div class="form-group form-group--nest">
                                        <input class="form-control mb-1" type="text" placeholder="">
                                        <button class="ps-btn ps-btn--sm">Choose</button>
                                    </div>
                                    <div class="form-group">
                                        <label>Video (optional)
                                        </label>
                                        <input class="form-control" type="text" placeholder="Enter video URL">
                                    </div>
                                </div>
                            </figure>
                            <figure class="ps-block--form-box">
                                <figcaption>Inventory</figcaption>
                                <div class="ps-block__content">
                                    <div class="form-group">
                                        <label>SKU<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>
                                    <div class="form-group form-group--select">
                                        <label>Status
                                        </label>
                                        <div class="form-group__content">
                                            <select class="ps-select" title="Status">
                                                <option value="1">Status 1</option>
                                                <option value="2">Status 2</option>
                                                <option value="3">Status 3</option>
                                                <option value="4">Status 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <figure class="ps-block--form-box">
                                <figcaption>Meta</figcaption>
                                <div class="ps-block__content">
                                    <div class="form-group form-group--select">
                                        <label>Brand
                                        </label>
                                        <div class="form-group__content">
                                            <select class="ps-select" title="Brand">
                                                <option value="1">Brand 1</option>
                                                <option value="2">Brand 2</option>
                                                <option value="3">Brand 3</option>
                                                <option value="4">Brand 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tags
                                        </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="ps-form__bottom"><a class="ps-btn ps-btn--black" href="products.html">Back</a>
                    <button class="ps-btn ps-btn--gray">Cancel</button>
                    <button class="ps-btn">Submit</button>
                </div>
            </form>
        </section>
    </div>
</main>