<section class="grid-inner">
    <div class="container">
        <div class="row">
            <!-- Service List -->
            <div class="col-md-4 coloumn c-box-1">
                <div class="icon-widget">
                    <i class="flaticon-email"></i>
                </div>
                <div class="text-content">
                    <h3>
                        Payment Plans
                    </h3>
                    <p>
                        There are always risks when you travel even 
                        on domestic trips. Find out how affordable cover can 
                        be by viewing payment options online. 
                        We can help you find the plan that best suits your needs.
                    </p>
                    <a href="<?= base_url('doctors/timetable')?>" class="btn btn-link">View Payment Options <i class="ti-arrow-right"></i></a>
                </div>
            </div>
            <!-- Benefits -->
            <div class="col-md-4 coloumn c-box-2">
                <div class="icon-widget">
                    <i class="flaticon-world"></i>
                </div>
                <div class="text-content">
                    <h3><?= (!empty($section['benefits']['title'])?$section['benefits']['title']:null)?></h3>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-caret-right"></i>Personal accident cover</li>
                        <li><i class="fa fa-caret-right"></i>Medical expenses</li>
                        <li><i class="fa fa-caret-right"></i>Emergency cash</li>
                        <li><i class="fa fa-caret-right"></i>Aid for spouse and dependent children</li>
                    </ul>
                </div>
            </div>
            <!-- Working Hours -->
            <div class="col-md-4 coloumn c-box-3">
                <div class="icon-widget">
                    <i class="flaticon-24-hours"></i>
                </div>
                <div class="text-content">
                    <h3>
                        Types of Domestic cover
                    </h3>
                    <p><?= (!empty($section['working_hours']['description'])?$section['working_hours']['description']:null)?></p>
                    <div style="border: none;padding:3px; 
                                border-bottom: 1px dotted #ccc;
                    ">Accidental death cover only</div>
                    <div style="border: none;padding:3px; border-bottom: 1px dotted #ccc; padding-top:5px">Combined Insurance cover</div>
                    <div style="border: none;padding:3px; border-bottom: 1px dotted #ccc; padding-top:5px">Way of Life Cover</div>
                </div>
            </div>
        </div>
    </div>
</section>