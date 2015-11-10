 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Form Components</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Default</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Help text</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control">
                                  <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Rounder</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Input focus</label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Disabled</label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Placeholder</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" placeholder="placeholder">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="password"  class="form-control" placeholder="">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">Static control</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static">email@example.com</p>
                              </div>
                          </div>
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            
            <!-- INLINE FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Inline Form</h4>
                      <form class="form-inline" role="form">
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail2">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputPassword2">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-theme">Sign in</button>
                      </form>
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
            </div><!-- /row -->
            
            <!-- INPUT MESSAGES -->
            <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Input Messages</h4>
                          <form class="form-horizontal tasi-form" method="get">
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Input with success</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" id="inputSuccess">
                                  </div>
                              </div>
                              <div class="form-group has-warning">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputWarning">Input with warning</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" id="inputWarning">
                                  </div>
                              </div>
                              <div class="form-group has-error">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputError">Input with error</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" id="inputError">
                                  </div>
                              </div>
                          </form>
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
            </div><!-- /row -->
            
            <!-- INPUT MESSAGES -->
            <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Checkboxes, Radios & Selects</h4>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="">
                Option one is this and that&mdash;be sure to include why it's great
              </label>
            </div>
            
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                Option one is this and that&mdash;be sure to include why it's great
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Option two can be something else and selecting it will deselect option one
              </label>
            </div>
            
            <hr>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
            </label>
            
            <hr>
            <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            <br>
            <select multiple class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>           
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
              
            <!-- CUSTOM TOGGLES -->
              <div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Custom Toggles</h4>
                          <div class="row mt">
                              <div class="col-sm-6 text-center">
                                  <input type="checkbox" checked="" data-toggle="switch" />
                              </div>
                              <div class="col-sm-6 text-center">
                                  <input type="checkbox" data-toggle="switch" />
                              </div>
                          </div>
                          <div class="row mt">
                              <div class="col-sm-6 text-center">
                                  <div class="switch switch-square"
                                       data-on-label="<i class=' fa fa-check'></i>"
                                       data-off-label="<i class='fa fa-times'></i>">
                                      <input type="checkbox" />
                                  </div>
                              </div>
                              <div class="col-sm-6 text-center">
                                  <div class="switch switch-square"
                                       data-on-label="<i class=' fa fa-check'></i>"
                                       data-off-label="<i class='fa fa-times'></i>">
                                      <input type="checkbox" checked="" />
                                  </div>
                              </div>
                          </div>
                          <div class="row mt">
                              <div class="col-sm-6 text-center">
                                  <input type="checkbox" disabled data-toggle="switch" />
                              </div>
                              <div class="col-sm-6 text-center">
                                  <input type="checkbox" checked disabled data-toggle="switch" />
                              </div>
                          </div>
                </div>
              </div>
            </div><!-- /row -->
            
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->





 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Responsive Table Examples</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Responsive Table</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Code</th>
                                  <th>Company</th>
                                  <th class="numeric">Price</th>
                                  <th class="numeric">Change</th>
                                  <th class="numeric">Change %</th>
                                  <th class="numeric">Open</th>
                                  <th class="numeric">High</th>
                                  <th class="numeric">Low</th>
                                  <th class="numeric">Volume</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>AAC</td>
                                  <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                  <td class="numeric">$1.38</td>
                                  <td class="numeric">-0.01</td>
                                  <td class="numeric">-0.36%</td>
                                  <td class="numeric">$1.39</td>
                                  <td class="numeric">$1.39</td>
                                  <td class="numeric">$1.38</td>
                                  <td class="numeric">9,395</td>
                              </tr>
                              <tr>
                                  <td>AAD</td>
                                  <td>ARDENT LEISURE GROUP</td>
                                  <td class="numeric">$1.15</td>
                                  <td class="numeric">  +0.02</td>
                                  <td class="numeric">1.32%</td>
                                  <td class="numeric">$1.14</td>
                                  <td class="numeric">$1.15</td>
                                  <td class="numeric">$1.13</td>
                                  <td class="numeric">56,431</td>
                              </tr>
                              <tr>
                                  <td>AAX</td>
                                  <td>AUSENCO LIMITED</td>
                                  <td class="numeric">$4.00</td>
                                  <td class="numeric">-0.04</td>
                                  <td class="numeric">-0.99%</td>
                                  <td class="numeric">$4.01</td>
                                  <td class="numeric">$4.05</td>
                                  <td class="numeric">$4.00</td>
                                  <td class="numeric">90,641</td>
                              </tr>
                              <tr>
                                  <td>ABC</td>
                                  <td>ADELAIDE BRIGHTON LIMITED</td>
                                  <td class="numeric">$3.00</td>
                                  <td class="numeric">  +0.06</td>
                                  <td class="numeric">2.04%</td>
                                  <td class="numeric">$2.98</td>
                                  <td class="numeric">$3.00</td>
                                  <td class="numeric">$2.96</td>
                                  <td class="numeric">862,518</td>
                              </tr>
                              <tr>
                                  <td>ABP</td>
                                  <td>ABACUS PROPERTY GROUP</td>
                                  <td class="numeric">$1.91</td>
                                  <td class="numeric">0.00</td>
                                  <td class="numeric">0.00%</td>
                                  <td class="numeric">$1.92</td>
                                  <td class="numeric">$1.93</td>
                                  <td class="numeric">$1.90</td>
                                  <td class="numeric">595,701</td>
                              </tr>
                              <tr>
                                  <td>ABY</td>
                                  <td>ADITYA BIRLA MINERALS LIMITED</td>
                                  <td class="numeric">$0.77</td>
                                  <td class="numeric">  +0.02</td>
                                  <td class="numeric">2.00%</td>
                                  <td class="numeric">$0.76</td>
                                  <td class="numeric">$0.77</td>
                                  <td class="numeric">$0.76</td>
                                  <td class="numeric">54,567</td>
                              </tr>
                              <tr>
                                  <td>ACR</td>
                                  <td>ACRUX LIMITED</td>
                                  <td class="numeric">$3.71</td>
                                  <td class="numeric">  +0.01</td>
                                  <td class="numeric">0.14%</td>
                                  <td class="numeric">$3.70</td>
                                  <td class="numeric">$3.72</td>
                                  <td class="numeric">$3.68</td>
                                  <td class="numeric">191,373</td>
                              </tr>
                              <tr>
                                  <td>ADU</td>
                                  <td>ADAMUS RESOURCES LIMITED</td>
                                  <td class="numeric">$0.72</td>
                                  <td class="numeric">0.00</td>
                                  <td class="numeric">0.00%</td>
                                  <td class="numeric">$0.73</td>
                                  <td class="numeric">$0.74</td>
                                  <td class="numeric">$0.72</td>
                                  <td class="numeric">8,602,291</td>
                              </tr>
                              <tr>
                                  <td>AGG</td>
                                  <td>ANGLOGOLD ASHANTI LIMITED</td>
                                  <td class="numeric">$7.81</td>
                                  <td class="numeric">-0.22</td>
                                  <td class="numeric">-2.74%</td>
                                  <td class="numeric">$7.82</td>
                                  <td class="numeric">$7.82</td>
                                  <td class="numeric">$7.81</td>
                                  <td class="numeric">148</td>
                              </tr>
                              <tr>
                                  <td>AGK</td>
                                  <td>AGL ENERGY LIMITED</td>
                                  <td class="numeric">$13.82</td>
                                  <td class="numeric">  +0.02</td>
                                  <td class="numeric">0.14%</td>
                                  <td class="numeric">$13.83</td>
                                  <td class="numeric">$13.83</td>
                                  <td class="numeric">$13.67</td>
                                  <td class="numeric">846,403</td>
                              </tr>
                              <tr>
                                  <td>AGO</td>
                                  <td>ATLAS IRON LIMITED</td>
                                  <td class="numeric">$3.17</td>
                                  <td class="numeric">-0.02</td>
                                  <td class="numeric">-0.47%</td>
                                  <td class="numeric">$3.11</td>
                                  <td class="numeric">$3.22</td>
                                  <td class="numeric">$3.10</td>
                                  <td class="numeric">5,416,303</td>
                              </tr>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  	
		  	<div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
						  <h4><i class="fa fa-angle-right"></i> No More Table</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                      <th>Code</th>
                                      <th>Company</th>
                                      <th class="numeric">Price</th>
                                      <th class="numeric">Change</th>
                                      <th class="numeric">Change %</th>
                                      <th class="numeric">Open</th>
                                      <th class="numeric">High</th>
                                      <th class="numeric">Low</th>
                                      <th class="numeric">Volume</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td data-title="Code">AAC</td>
                                      <td data-title="Company">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                      <td class="numeric" data-title="Price">$1.38</td>
                                      <td class="numeric" data-title="Change">-0.01</td>
                                      <td class="numeric" data-title="Change %">-0.36%</td>
                                      <td class="numeric" data-title="Open">$1.39</td>
                                      <td class="numeric" data-title="High">$1.39</td>
                                      <td class="numeric" data-title="Low">$1.38</td>
                                      <td class="numeric" data-title="Volume">9,395</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">AAD</td>
                                      <td data-title="Company">ARDENT LEISURE GROUP</td>
                                      <td class="numeric" data-title="Price">$1.15</td>
                                      <td class="numeric" data-title="Change">  +0.02</td>
                                      <td class="numeric" data-title="Change %">1.32%</td>
                                      <td class="numeric" data-title="Open">$1.14</td>
                                      <td class="numeric" data-title="High">$1.15</td>
                                      <td class="numeric" data-title="Low">$1.13</td>
                                      <td class="numeric" data-title="Volume">56,431</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">AAX</td>
                                      <td data-title="Company">AUSENCO LIMITED</td>
                                      <td class="numeric" data-title="Price">$4.00</td>
                                      <td class="numeric" data-title="Change">-0.04</td>
                                      <td class="numeric" data-title="Change %">-0.99%</td>
                                      <td class="numeric" data-title="Open">$4.01</td>
                                      <td class="numeric" data-title="High">$4.05</td>
                                      <td class="numeric" data-title="Low">$4.00</td>
                                      <td class="numeric" data-title="Volume">90,641</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">ABC</td>
                                      <td data-title="Company">ADELAIDE BRIGHTON LIMITED</td>
                                      <td class="numeric" data-title="Price">$3.00</td>
                                      <td class="numeric" data-title="Change">  +0.06</td>
                                      <td class="numeric" data-title="Change %">2.04%</td>
                                      <td class="numeric" data-title="Open">$2.98</td>
                                      <td class="numeric" data-title="High">$3.00</td>
                                      <td class="numeric" data-title="Low">$2.96</td>
                                      <td class="numeric" data-title="Volume">862,518</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">ABP</td>
                                      <td data-title="Company">ABACUS PROPERTY GROUP</td>
                                      <td class="numeric" data-title="Price">$1.91</td>
                                      <td class="numeric" data-title="Change">0.00</td>
                                      <td class="numeric" data-title="Change %">0.00%</td>
                                      <td class="numeric" data-title="Open">$1.92</td>
                                      <td class="numeric" data-title="High">$1.93</td>
                                      <td class="numeric" data-title="Low">$1.90</td>
                                      <td class="numeric" data-title="Volume">595,701</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">ABY</td>
                                      <td data-title="Company">ADITYA BIRLA MINERALS LIMITED</td>
                                      <td class="numeric" data-title="Price">$0.77</td>
                                      <td class="numeric" data-title="Change">  +0.02</td>
                                      <td class="numeric" data-title="Change %">2.00%</td>
                                      <td class="numeric" data-title="Open">$0.76</td>
                                      <td class="numeric" data-title="High">$0.77</td>
                                      <td class="numeric" data-title="Low">$0.76</td>
                                      <td class="numeric" data-title="Volume">54,567</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">ACR</td>
                                      <td data-title="Company">ACRUX LIMITED</td>
                                      <td class="numeric" data-title="Price">$3.71</td>
                                      <td class="numeric" data-title="Change">  +0.01</td>
                                      <td class="numeric" data-title="Change %">0.14%</td>
                                      <td class="numeric" data-title="Open">$3.70</td>
                                      <td class="numeric" data-title="High">$3.72</td>
                                      <td class="numeric" data-title="Low">$3.68</td>
                                      <td class="numeric" data-title="Volume">191,373</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">ADU</td>
                                      <td data-title="Company">ADAMUS RESOURCES LIMITED</td>
                                      <td class="numeric" data-title="Price">$0.72</td>
                                      <td class="numeric" data-title="Change">0.00</td>
                                      <td class="numeric" data-title="Change %">0.00%</td>
                                      <td class="numeric" data-title="Open">$0.73</td>
                                      <td class="numeric" data-title="High">$0.74</td>
                                      <td class="numeric" data-title="Low">$0.72</td>
                                      <td class="numeric" data-title="Volume">8,602,291</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">AGG</td>
                                      <td data-title="Company">ANGLOGOLD ASHANTI LIMITED</td>
                                      <td class="numeric" data-title="Price">$7.81</td>
                                      <td class="numeric" data-title="Change">-0.22</td>
                                      <td class="numeric" data-title="Change %">-2.74%</td>
                                      <td class="numeric" data-title="Open">$7.82</td>
                                      <td class="numeric" data-title="High">$7.82</td>
                                      <td class="numeric" data-title="Low">$7.81</td>
                                      <td class="numeric" data-title="Volume">148</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">AGK</td>
                                      <td data-title="Company">AGL ENERGY LIMITED</td>
                                      <td class="numeric" data-title="Price">$13.82</td>
                                      <td class="numeric" data-title="Change">  +0.02</td>
                                      <td class="numeric" data-title="Change %">0.14%</td>
                                      <td class="numeric" data-title="Open">$13.83</td>
                                      <td class="numeric" data-title="High">$13.83</td>
                                      <td class="numeric" data-title="Low">$13.67</td>
                                      <td class="numeric" data-title="Volume">846,403</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">AGO</td>
                                      <td data-title="Company">ATLAS IRON LIMITED</td>
                                      <td class="numeric" data-title="Price">$3.17</td>
                                      <td class="numeric" data-title="Change">-0.02</td>
                                      <td class="numeric" data-title="Change %">-0.47%</td>
                                      <td class="numeric" data-title="Open">$3.11</td>
                                      <td class="numeric" data-title="High">$3.22</td>
                                      <td class="numeric" data-title="Low">$3.10</td>
                                      <td class="numeric" data-title="Volume">5,416,303</td>
                                  </tr>
                                  </tbody>
                              </table>
                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->