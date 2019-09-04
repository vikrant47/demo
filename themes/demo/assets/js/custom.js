/**Call to action source*/
const EXTENSIONS = {
    image: {
        extensions: ['jpg', 'jpeg', 'png', 'bmp', 'ico', 'gif'],
        template: function (data) {
            return `<img src="${data.image}"></img>`;
        }
    },
    video: {
        extensions: ['mkv', 'mp4', 'm4a', 'm4v', 'f4v', 'f4a', 'm4b', 'm4r', 'f4b', 'mov', 'webm', 'flv', 'avi'],
        template: function (data) {
            return `<div class="container">
                        <video poster="${data.image}" controls>
                            <source src="${data.url}"></source>
                        </video>
                    </div>`;
        }
    },
    audio: {
        extensions: ['mp3', 'wav', 'webm'],
        template: function (data) {
            return `<audio src="${data.url}"></audio>`;
        }
    },
    search: function (name) {
        const types = Object.keys(EXTENSIONS).filter(type => type !== 'search');
        for (const type of types) {
            if (EXTENSIONS[type].extensions.findIndex(ext => name.endsWith(ext)) >= 0) {
                return type;
            }
        }
        return 'image';
    }
};
$(document).on('click', '.call-to-action', function () {
    let link = $(this).data('link');
    if (link) {
        if (link.type === 'url') {
            window.location.href = link.url;
        } else if (link.type === 'external_url') {
            window.open(link.url);
        } else if (link.type === 'media' || link.type === 'image') {
            const extension = EXTENSIONS[EXTENSIONS.search($(this).data(link.type))];
            let $a = $(this).data('.media-popup');
            if (!$a) {
                $a = $('<a class="media-popup"/>').prop('href', '#content-wrapper').appendTo(document.body)
                    .magnificPopup({
                        items: {
                            type: 'inline',
                            src: extension.template({url: $(this).data(link.type), image: $(this).data('image')})
                        }
                    });
                $(this).data('.media-popup', $a);
            }
            $a.click();
        } else if (link.type === 'embed') {
            $.magnificPopup.open({
                items: {
                    src: link.url
                },
                type: 'iframe'
            });
        }
    }
    return false;
});