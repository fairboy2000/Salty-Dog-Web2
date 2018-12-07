(function(document, window) {
   'use strict';
  
   var apiKey = 'c149b994c54c114bd7836b61539eec2e';
   var photoSetId = '72157702923086971';
   var userId = '124478044%40N03';
   var apiSig= 'daafdd350cd6510b5dda8a2da9a7b7c4';
   var authToken = '72157704404072455-bb23c4b708979182';
   var apiURL = 'https://api.flickr.com/services/rest/';
//    var tags = "salty+dog+cafe+dog+photos+for+salty+dog+site"

   function searchText(parameters) {
      var requestParameters = Utility.extend(parameters, {
         method: 'flickr.photosets.getPhotos',
         api_key: apiKey,
         photoset_id: photoSetId,
         user_id: userId,
         auth_token: authToken,
         api_sig: apiSig,
        //  tags: tags,
         format: 'json'
      });

      var script = document.createElement('script');
      script.src = Utility.buildUrl(apiURL, requestParameters);
      document.head.appendChild(script);
      document.head.removeChild(script);
   }

   function buildThumbnailUrl(photo) {
      return 'https://farm' + photo.farm + '.staticflickr.com/' + photo.server +
      '/' + photo.id + '_' + photo.secret + '_q.jpg';
   }

   function buildPhotoUrl(photo) {
      return 'https://farm' + photo.farm + '.staticflickr.com/' + photo.server +
             '/' + photo.id + '_' + photo.secret + '.jpg';
   }

   function buildPhotoLargeUrl(photo) {
      return 'https://farm' + photo.farm + '.staticflickr.com/' + photo.server +
      '/' + photo.id + '_' + photo.secret + '_b.jpg';
   }


   window.Flickr = Utility.extend(window.Flickr || {}, {
      buildThumbnailUrl: buildThumbnailUrl,
      buildPhotoUrl: buildPhotoUrl,
      buildPhotoLargeUrl: buildPhotoLargeUrl,
      searchText: searchText
   });
})(document, window);