/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


const Uppy = require('@uppy/core')
const XHRUpload = require('@uppy/xhr-upload')
const Dashboard = require('@uppy/dashboard')
const Tus = require('@uppy/tus')

import _ from 'lodash'

// And their styles (for UI plugins)
require('@uppy/core/dist/style.css')
require('@uppy/dashboard/dist/style.css')

localStorage.clear(); // IF Files Delete from Backend. It is not processing.
var opts = {"DashboardInline": true, "autoProceed": false}; 
var restrictions = {
    maxFileSize: 100000000,
    maxNumberOfFiles: 1,
    minNumberOfFiles: 1,
    allowedFileTypes: ['audio/*']
  };
  var uppy = Uppy({
    debug: true,
    autoProceed: opts.autoProceed,
    restrictions: restrictions
  });

  uppy.use(Dashboard, {
    trigger: '.UppyModalOpenerBtn',
    inline: opts.DashboardInline,
    target: opts.DashboardInline ? '.DashboardContainer' : 'body',
    replaceTargetContent: opts.DashboardInline,
    note: opts.restrictions ? 'Images and video only, 2–3 files, up to 1 MB' : '',
    height: 300,
    showProgressDetails: true,
    proudlyDisplayPoweredByUppy:false,
    metaFields: [{
      id: 'name',
      name: 'Name',
      placeholder: 'file name'
    }, {
      id: 'caption',
      name: 'Caption',
      placeholder: 'add description'
    }],
    browserBackButtonClose: false
  });

  uppy.use(Tus, {
    endpoint: 'http://127.0.0.1:8000/tus/',
    resume: true
  });
  uppy.on('complete', function (result) {
    console.log('successful files:');
    console.log(result.successful);
    if(result.successful && result.successful.length > 0)
    {
      _.forEach(result.successful, (item, key) => {
        jQuery('.upload-media input[name=file]').val(item.data.name);
      })
    }

    console.log('failed files:');
    console.log(result.failed);
  });



  jQuery(document).ready(function() {
    jQuery('.post-form').on('submit', function() {
      var isValid = true;
      $('.post-form .required').each(function(){
        if($(this).val() == "") {
          isValid = false;
          $(this).addClass('is-invalid');
        } else {
          $(this).removeClass('is-invalid');
        }
      });

      if(!isValid)
      {
        return false;
      }


      var postFileElem = jQuery(this).find('.upload-media input[name=file]');
      console.log(postFileElem.val());
      if(postFileElem.length > 0)
      {
        if(postFileElem.val() == "")
        {
          alert("Please upload File.")
          return false;
        }
      }
    });
  });
