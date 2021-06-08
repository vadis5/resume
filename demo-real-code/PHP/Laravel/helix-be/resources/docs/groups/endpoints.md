# Endpoints


## Display the specified Profile.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/mobile/v1/profiles/sequi?id=6" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/mobile/v1/profiles/sequi"
);

let params = {
    "id": "6",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Got Specific Profile",
 "data": {
    "id": 1,
    "user_id": 1,
    "nickname": 5,
    "quiet_time_from": "2021-03-09 17:54:59",
    "quiet_time_to": "2021-03-09 17:54:59",
    "avatar_path": "/userAvatar/7.svg",
    "created_at": "2021-03-09T17:54:59.000000Z",
    "updated_at": "2021-03-09T17:54:59.000000Z",
  }
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Not Found",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-mobile-v1-profiles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-mobile-v1-profiles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mobile-v1-profiles--id-"></code></pre>
</div>
<div id="execution-error-GETapi-mobile-v1-profiles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mobile-v1-profiles--id-"></code></pre>
</div>
<form id="form-GETapi-mobile-v1-profiles--id-" data-method="GET" data-path="api/mobile/v1/profiles/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-mobile-v1-profiles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-mobile-v1-profiles--id-" onclick="tryItOut('GETapi-mobile-v1-profiles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-mobile-v1-profiles--id-" onclick="cancelTryOut('GETapi-mobile-v1-profiles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-mobile-v1-profiles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/mobile/v1/profiles/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-mobile-v1-profiles--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-mobile-v1-profiles--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-mobile-v1-profiles--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-mobile-v1-profiles--id-" data-component="query"  hidden>
<br>
Profile ID</p>
</form>


## Update the specified Profile

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/mobile/v1/profiles/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nickname":"dolore","quiet_time_from":"sint","quiet_time_to":"porro","avatar_path":{},"profile":{"nickname":"sunt","quiet_time_from":"enim","quiet_time_to":"earum","avatar_path":"est"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/mobile/v1/profiles/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nickname": "dolore",
    "quiet_time_from": "sint",
    "quiet_time_to": "porro",
    "avatar_path": {},
    "profile": {
        "nickname": "sunt",
        "quiet_time_from": "enim",
        "quiet_time_to": "earum",
        "avatar_path": "est"
    }
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Updated The Profile.",
 "data": [
    "id": 1,
    "user_id": 1,
    "nickname": 5,
    "quiet_time_from": "2021-03-09 17:54:59",
    "quiet_time_to": "2021-03-09 17:54:59",
    "avatar_path": "/userAvatar/7.svg",
    "created_at": "2021-03-09T17:54:59.000000Z",
    "updated_at": "2021-03-09T17:54:59.000000Z",
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "nickname":["The nickname must be a string"],
  "quiet_time_from":["The quiet_time_from must be a string"],
  "quiet_time_to":["The quiet_time_to must be a string"],
  "avatar_path":["The avatar_path must be a svg"],
 }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-PUTapi-mobile-v1-profiles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-mobile-v1-profiles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-mobile-v1-profiles--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-mobile-v1-profiles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-mobile-v1-profiles--id-"></code></pre>
</div>
<form id="form-PUTapi-mobile-v1-profiles--id-" data-method="PUT" data-path="api/mobile/v1/profiles/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-mobile-v1-profiles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-mobile-v1-profiles--id-" onclick="tryItOut('PUTapi-mobile-v1-profiles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-mobile-v1-profiles--id-" onclick="cancelTryOut('PUTapi-mobile-v1-profiles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-mobile-v1-profiles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/mobile/v1/profiles/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-mobile-v1-profiles--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-mobile-v1-profiles--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-mobile-v1-profiles--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nickname</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nickname" data-endpoint="PUTapi-mobile-v1-profiles--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>quiet_time_from</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="quiet_time_from" data-endpoint="PUTapi-mobile-v1-profiles--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>quiet_time_to</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="quiet_time_to" data-endpoint="PUTapi-mobile-v1-profiles--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>avatar_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="avatar_path" data-endpoint="PUTapi-mobile-v1-profiles--id-" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>profile</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The Profile object</summary>
<br>
<p>
<b><code>profile.nickname</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile.nickname" data-endpoint="PUTapi-mobile-v1-profiles--id-" data-component="body"  hidden>
<br>
The nickname of the Profile</p>
<p>
<b><code>profile.quiet_time_from</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile.quiet_time_from" data-endpoint="PUTapi-mobile-v1-profiles--id-" data-component="body"  hidden>
<br>
The quiet_time_from of the Profile</p>
<p>
<b><code>profile.quiet_time_to</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile.quiet_time_to" data-endpoint="PUTapi-mobile-v1-profiles--id-" data-component="body"  hidden>
<br>
The quiet_time_to of the Profile</p>
<p>
<b><code>profile.avatar_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile.avatar_path" data-endpoint="PUTapi-mobile-v1-profiles--id-" data-component="body"  hidden>
<br>
The file for upload</p>
</details>
</p>

</form>


## Display a listing of all Media Files for auth user.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/media-files" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/media-files"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "List of Media Files.",
    "data": [
        {
            "id": 2,
            "path": "\/mediaLibrary\/media_library_20210421171927.jpg",
            "title": "Second media file",
            "tenant_id": 1,
            "alt_text": null,
            "description": "Test for second Media Files",
            "extension": "jpg",
            "created_at": "2021-04-21T17:19:27.000000Z",
            "updated_at": "2021-04-21T17:19:27.000000Z",
            "tags": [
                {
                    "id": 1,
                    "name": "tag-1-1-1",
                    "department_id": 1,
                    "pivot": {
                        "media_file_id": 2,
                        "tag_id": 1
                    }
                },
                {
                    "id": 2,
                    "name": "tag-1-1-2",
                    "department_id": 1,
                    "pivot": {
                        "media_file_id": 2,
                        "tag_id": 2
                    }
                }
            ],
            "tenant": {
                "id": 1,
                "name": "Helix",
                "company_number": "00000",
                "seats": 999,
                "logo": null,
                "created_at": null,
                "updated_at": null,
                "logo_status": 1
            }
        }
    ]
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-media-files" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-media-files"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-media-files"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-media-files" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-media-files"></code></pre>
</div>
<form id="form-GETapi-cms-v1-media-files" data-method="GET" data-path="api/cms/v1/media-files" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-media-files', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-media-files" onclick="tryItOut('GETapi-cms-v1-media-files');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-media-files" onclick="cancelTryOut('GETapi-cms-v1-media-files');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-media-files" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/media-files</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-media-files" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-media-files" data-component="header"></label>
</p>
</form>


## Display the specified Media File.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/media-files/a?id=13" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/media-files/a"
);

let params = {
    "id": "13",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Got Specific Media File.",
    "data": {
        "id": 2,
        "path": "\/mediaLibrary\/media_library_20210421171927.jpg",
        "title": "Second media file",
        "tenant_id": 1,
        "alt_text": null,
        "description": "Test for second Media Files",
        "extension": "jpg",
        "created_at": "2021-04-21T17:19:27.000000Z",
        "updated_at": "2021-04-21T17:19:27.000000Z",
        "tags": [
            {
                "id": 1,
                "name": "tag-1-1-1",
                "department_id": 1,
                "pivot": {
                    "media_file_id": 2,
                    "tag_id": 1
                }
            },
            {
                "id": 2,
                "name": "tag-1-1-2",
                "department_id": 1,
                "pivot": {
                    "media_file_id": 2,
                    "tag_id": 2
                }
            }
        ],
        "tenant": {
            "id": 1,
            "name": "Helix",
            "company_number": "00000",
            "seats": 999,
            "logo": null,
            "created_at": null,
            "updated_at": null,
            "logo_status": 1
        }
    }
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Not Found",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-media-files--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-media-files--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-media-files--id-"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-media-files--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-media-files--id-"></code></pre>
</div>
<form id="form-GETapi-cms-v1-media-files--id-" data-method="GET" data-path="api/cms/v1/media-files/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-media-files--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-media-files--id-" onclick="tryItOut('GETapi-cms-v1-media-files--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-media-files--id-" onclick="cancelTryOut('GETapi-cms-v1-media-files--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-media-files--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/media-files/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-media-files--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-media-files--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-cms-v1-media-files--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-cms-v1-media-files--id-" data-component="query"  hidden>
<br>
Mood Tracker ID</p>
</form>


## Store a newly created Media File

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/cms/v1/media-files" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"explicabo","tenant_id":8,"alt_text":"sequi","description":"molestiae","tags":[17,15],"file":"est","mediaFile":{"title":"impedit","tenant_id":"libero","alt_text":"et","description":"dignissimos","path":"odit","extension":"doloribus"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/media-files"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "explicabo",
    "tenant_id": 8,
    "alt_text": "sequi",
    "description": "molestiae",
    "tags": [
        17,
        15
    ],
    "file": "est",
    "mediaFile": {
        "title": "impedit",
        "tenant_id": "libero",
        "alt_text": "et",
        "description": "dignissimos",
        "path": "odit",
        "extension": "doloribus"
    }
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new Media File.",
 "data": [
     "id": 2,
     "path": "/mediaLibrary/media_library_20210421171927.jpg",
     "title": "Second media file",
     "tenant_id": 1,
     "alt_text": null,
     "description": "Test for second Media Files",
     "extension": "jpg",
     "created_at": "2021-04-21T17:19:27.000000Z",
     "updated_at": "2021-04-21T17:19:27.000000Z",
     "tags": [
       {
         "id": 1,
         "name": "tag-1-1-1",
         "department_id": 1,
         "pivot": {
           "media_file_id": 2,
           "tag_id": 1
         }
       },
       {
         "id": 2,
         "name": "tag-1-1-2",
         "department_id": 1,
         "pivot": {
           "media_file_id": 2,
           "tag_id": 2
         }
       }
     ],
     "tenant": {
       "id": 1,
       "name": "Helix",
       "company_number": "00000",
       "seats": 999,
       "logo": null,
       "created_at": null,
       "updated_at": null,
       "logo_status": 1
     }
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "key":["The key field must be a string."],
  "value":["The value field must be a string"],
 }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-cms-v1-media-files" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-cms-v1-media-files"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cms-v1-media-files"></code></pre>
</div>
<div id="execution-error-POSTapi-cms-v1-media-files" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cms-v1-media-files"></code></pre>
</div>
<form id="form-POSTapi-cms-v1-media-files" data-method="POST" data-path="api/cms/v1/media-files" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-cms-v1-media-files', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-cms-v1-media-files" onclick="tryItOut('POSTapi-cms-v1-media-files');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-cms-v1-media-files" onclick="cancelTryOut('POSTapi-cms-v1-media-files');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-cms-v1-media-files" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/cms/v1/media-files</code></b>
</p>
<p>
<label id="auth-POSTapi-cms-v1-media-files" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-cms-v1-media-files" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-cms-v1-media-files" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tenant_id" data-endpoint="POSTapi-cms-v1-media-files" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>alt_text</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="alt_text" data-endpoint="POSTapi-cms-v1-media-files" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-cms-v1-media-files" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>tags</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="tags.0" data-endpoint="POSTapi-cms-v1-media-files" data-component="body"  hidden>
<input type="number" name="tags.1" data-endpoint="POSTapi-cms-v1-media-files" data-component="body" hidden>
<br>
</p>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file" data-endpoint="POSTapi-cms-v1-media-files" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>mediaFile</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The Media File object</summary>
<br>
<p>
<b><code>mediaFile.title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="mediaFile.title" data-endpoint="POSTapi-cms-v1-media-files" data-component="body" required  hidden>
<br>
The title of the Media File</p>
<p>
<b><code>mediaFile.tenant_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="mediaFile.tenant_id" data-endpoint="POSTapi-cms-v1-media-files" data-component="body" required  hidden>
<br>
The id of the Tenant</p>
<p>
<b><code>mediaFile.alt_text</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="mediaFile.alt_text" data-endpoint="POSTapi-cms-v1-media-files" data-component="body"  hidden>
<br>
The alt text of the Media File</p>
<p>
<b><code>mediaFile.description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="mediaFile.description" data-endpoint="POSTapi-cms-v1-media-files" data-component="body" required  hidden>
<br>
The description of the Media File</p>
<p>
<b><code>mediaFile.path</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="mediaFile.path" data-endpoint="POSTapi-cms-v1-media-files" data-component="body" required  hidden>
<br>
The path of the Media File</p>
<p>
<b><code>mediaFile.extension</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="mediaFile.extension" data-endpoint="POSTapi-cms-v1-media-files" data-component="body" required  hidden>
<br>
The extension of the Media File</p>
</details>
</p>

</form>


## Update a newly created Media File

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/cms/v1/media-files/maxime" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"pariatur","tenant_id":14,"alt_text":"occaecati","description":"velit","tags":[18,8],"mediaFile":{"title":"corrupti","tenant_id":"ut","alt_text":"eum","description":"inventore","path":"illum","extension":"saepe"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/media-files/maxime"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "pariatur",
    "tenant_id": 14,
    "alt_text": "occaecati",
    "description": "velit",
    "tags": [
        18,
        8
    ],
    "mediaFile": {
        "title": "corrupti",
        "tenant_id": "ut",
        "alt_text": "eum",
        "description": "inventore",
        "path": "illum",
        "extension": "saepe"
    }
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new Media File.",
 "data": [
     "id": 2,
     "path": "/mediaLibrary/media_library_20210421171927.jpg",
     "title": "Second media file",
     "tenant_id": 1,
     "alt_text": null,
     "description": "Test for second Media Files",
     "extension": "jpg",
     "created_at": "2021-04-21T17:19:27.000000Z",
     "updated_at": "2021-04-21T17:19:27.000000Z",
     "tags": [
       {
         "id": 1,
         "name": "tag-1-1-1",
         "department_id": 1,
         "pivot": {
           "media_file_id": 2,
           "tag_id": 1
         }
       },
       {
         "id": 2,
         "name": "tag-1-1-2",
         "department_id": 1,
         "pivot": {
           "media_file_id": 2,
           "tag_id": 2
         }
       }
     ],
     "tenant": {
       "id": 1,
       "name": "Helix",
       "company_number": "00000",
       "seats": 999,
       "logo": null,
       "created_at": null,
       "updated_at": null,
       "logo_status": 1
     }
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "key":["The key field must be a string."],
  "value":["The value field must be a string"],
 }
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Not Found",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-PUTapi-cms-v1-media-files--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-cms-v1-media-files--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cms-v1-media-files--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-cms-v1-media-files--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cms-v1-media-files--id-"></code></pre>
</div>
<form id="form-PUTapi-cms-v1-media-files--id-" data-method="PUT" data-path="api/cms/v1/media-files/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-cms-v1-media-files--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-cms-v1-media-files--id-" onclick="tryItOut('PUTapi-cms-v1-media-files--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-cms-v1-media-files--id-" onclick="cancelTryOut('PUTapi-cms-v1-media-files--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-cms-v1-media-files--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/cms/v1/media-files/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-cms-v1-media-files--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tenant_id" data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>alt_text</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="alt_text" data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>tags</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="tags.0" data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="body"  hidden>
<input type="number" name="tags.1" data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="body" hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>mediaFile</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The Media File object</summary>
<br>
<p>
<b><code>mediaFile.title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="mediaFile.title" data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="body"  hidden>
<br>
The title of the Media File</p>
<p>
<b><code>mediaFile.tenant_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="mediaFile.tenant_id" data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="body" required  hidden>
<br>
The id of the Tenant</p>
<p>
<b><code>mediaFile.alt_text</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="mediaFile.alt_text" data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="body"  hidden>
<br>
The alt text of the Media File</p>
<p>
<b><code>mediaFile.description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="mediaFile.description" data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="body" required  hidden>
<br>
The description of the Media File</p>
<p>
<b><code>mediaFile.path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="mediaFile.path" data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="body"  hidden>
<br>
The path of the Media File</p>
<p>
<b><code>mediaFile.extension</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="mediaFile.extension" data-endpoint="PUTapi-cms-v1-media-files--id-" data-component="body" required  hidden>
<br>
The extension of the Media File</p>
</details>
</p>

</form>


## Remove the specified Media File.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/cms/v1/media-files/deleniti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/media-files/deleniti"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Deleted The Media File.",
 "data": null
}

* @response   404 {
 "success": false,
 "code": 404,
 "message": "Not found",
 "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-DELETEapi-cms-v1-media-files--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-cms-v1-media-files--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cms-v1-media-files--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-cms-v1-media-files--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cms-v1-media-files--id-"></code></pre>
</div>
<form id="form-DELETEapi-cms-v1-media-files--id-" data-method="DELETE" data-path="api/cms/v1/media-files/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cms-v1-media-files--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-cms-v1-media-files--id-" onclick="tryItOut('DELETEapi-cms-v1-media-files--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-cms-v1-media-files--id-" onclick="cancelTryOut('DELETEapi-cms-v1-media-files--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-cms-v1-media-files--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/cms/v1/media-files/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-cms-v1-media-files--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-cms-v1-media-files--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-cms-v1-media-files--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Get message test message




> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/rollbar/message" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/rollbar/message"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-rollbar-message" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-rollbar-message"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-rollbar-message"></code></pre>
</div>
<div id="execution-error-GETapi-v1-rollbar-message" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-rollbar-message"></code></pre>
</div>
<form id="form-GETapi-v1-rollbar-message" data-method="GET" data-path="api/v1/rollbar/message" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-rollbar-message', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-rollbar-message" onclick="tryItOut('GETapi-v1-rollbar-message');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-rollbar-message" onclick="cancelTryOut('GETapi-v1-rollbar-message');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-rollbar-message" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/rollbar/message</code></b>
</p>
</form>


## Register a new user




> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-auth-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-auth-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-register"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-register"></code></pre>
</div>
<form id="form-POSTapi-v1-auth-register" data-method="POST" data-path="api/v1/auth/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-auth-register" onclick="tryItOut('POSTapi-v1-auth-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-auth-register" onclick="cancelTryOut('POSTapi-v1-auth-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-auth-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/auth/register</code></b>
</p>
</form>


## Login user and return a token




> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-login"></code></pre>
</div>
<form id="form-POSTapi-v1-auth-login" data-method="POST" data-path="api/v1/auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-auth-login" onclick="tryItOut('POSTapi-v1-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-auth-login" onclick="cancelTryOut('POSTapi-v1-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/auth/login</code></b>
</p>
</form>


## Refresh a token.




> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/auth/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Token could not be parsed from the request.",
    "exception": "Tymon\\JWTAuth\\Exceptions\\JWTException",
    "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/tymon\/jwt-auth\/src\/JWTGuard.php",
    "line": 419,
    "trace": [
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/tymon\/jwt-auth\/src\/JWTGuard.php",
            "line": 173,
            "function": "requireToken",
            "class": "Tymon\\JWTAuth\\JWTGuard",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/AuthManager.php",
            "line": 307,
            "function": "refresh",
            "class": "Tymon\\JWTAuth\\JWTGuard",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/app\/Http\/Controllers\/AuthController.php",
            "line": 100,
            "function": "__call",
            "class": "Illuminate\\Auth\\AuthManager",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "refresh",
            "class": "App\\Http\\Controllers\\AuthController",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 692,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 63,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 694,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 669,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 635,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 624,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/symfony\/console\/Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/symfony\/console\/Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/symfony\/console\/Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/helix4.com\/helix-cms\/helix-be\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-v1-auth-refresh" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-auth-refresh"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-auth-refresh"></code></pre>
</div>
<div id="execution-error-GETapi-v1-auth-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-auth-refresh"></code></pre>
</div>
<form id="form-GETapi-v1-auth-refresh" data-method="GET" data-path="api/v1/auth/refresh" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-auth-refresh', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-auth-refresh" onclick="tryItOut('GETapi-v1-auth-refresh');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-auth-refresh" onclick="cancelTryOut('GETapi-v1-auth-refresh');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-auth-refresh" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/auth/refresh</code></b>
</p>
</form>


## Get authenticated user




> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/auth/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/auth/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-auth-me" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-auth-me"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-auth-me"></code></pre>
</div>
<div id="execution-error-GETapi-v1-auth-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-auth-me"></code></pre>
</div>
<form id="form-GETapi-v1-auth-me" data-method="GET" data-path="api/v1/auth/me" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-auth-me', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-auth-me" onclick="tryItOut('GETapi-v1-auth-me');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-auth-me" onclick="cancelTryOut('GETapi-v1-auth-me');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-auth-me" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/auth/me</code></b>
</p>
</form>


## Logout User




> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-auth-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-auth-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-logout"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-logout"></code></pre>
</div>
<form id="form-POSTapi-v1-auth-logout" data-method="POST" data-path="api/v1/auth/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-auth-logout" onclick="tryItOut('POSTapi-v1-auth-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-auth-logout" onclick="cancelTryOut('POSTapi-v1-auth-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-auth-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/auth/logout</code></b>
</p>
</form>


## Logout User




> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/users/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/users/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-users-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-users-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users-logout"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-users-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users-logout"></code></pre>
</div>
<form id="form-POSTapi-v1-users-logout" data-method="POST" data-path="api/v1/users/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-users-logout" onclick="tryItOut('POSTapi-v1-users-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-users-logout" onclick="cancelTryOut('POSTapi-v1-users-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-users-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/users/logout</code></b>
</p>
</form>


## api/v1/profile




> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-profile" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-profile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-profile"></code></pre>
</div>
<div id="execution-error-GETapi-v1-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-profile"></code></pre>
</div>
<form id="form-GETapi-v1-profile" data-method="GET" data-path="api/v1/profile" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-profile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-profile" onclick="tryItOut('GETapi-v1-profile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-profile" onclick="cancelTryOut('GETapi-v1-profile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-profile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/profile</code></b>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/profiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/profiles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-profiles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-profiles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-profiles"></code></pre>
</div>
<div id="execution-error-GETapi-v1-profiles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-profiles"></code></pre>
</div>
<form id="form-GETapi-v1-profiles" data-method="GET" data-path="api/v1/profiles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-profiles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-profiles" onclick="tryItOut('GETapi-v1-profiles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-profiles" onclick="cancelTryOut('GETapi-v1-profiles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-profiles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/profiles</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/profiles/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/profiles/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-profiles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-profiles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-profiles--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-profiles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-profiles--id-"></code></pre>
</div>
<form id="form-GETapi-v1-profiles--id-" data-method="GET" data-path="api/v1/profiles/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-profiles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-profiles--id-" onclick="tryItOut('GETapi-v1-profiles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-profiles--id-" onclick="cancelTryOut('GETapi-v1-profiles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-profiles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/profiles/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-profiles--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/profiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":19,"nickname":"dolore","quiet_time_from":"reprehenderit","quiet_time_to":"consequatur","avatar_path":{}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/profiles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 19,
    "nickname": "dolore",
    "quiet_time_from": "reprehenderit",
    "quiet_time_to": "consequatur",
    "avatar_path": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-profiles" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-profiles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-profiles"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-profiles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-profiles"></code></pre>
</div>
<form id="form-POSTapi-v1-profiles" data-method="POST" data-path="api/v1/profiles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-profiles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-profiles" onclick="tryItOut('POSTapi-v1-profiles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-profiles" onclick="cancelTryOut('POSTapi-v1-profiles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-profiles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/profiles</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-v1-profiles" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>nickname</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nickname" data-endpoint="POSTapi-v1-profiles" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>quiet_time_from</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="quiet_time_from" data-endpoint="POSTapi-v1-profiles" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>quiet_time_to</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="quiet_time_to" data-endpoint="POSTapi-v1-profiles" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>avatar_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="avatar_path" data-endpoint="POSTapi-v1-profiles" data-component="body"  hidden>
<br>
</p>

</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/profiles/molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nickname":"ex","quiet_time_from":"corporis","quiet_time_to":"eaque","avatar_path":{}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/profiles/molestiae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nickname": "ex",
    "quiet_time_from": "corporis",
    "quiet_time_to": "eaque",
    "avatar_path": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-profiles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-profiles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-profiles--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-profiles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-profiles--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-profiles--id-" data-method="PUT" data-path="api/v1/profiles/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-profiles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-profiles--id-" onclick="tryItOut('PUTapi-v1-profiles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-profiles--id-" onclick="cancelTryOut('PUTapi-v1-profiles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-profiles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/profiles/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-profiles--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nickname</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nickname" data-endpoint="PUTapi-v1-profiles--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>quiet_time_from</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="quiet_time_from" data-endpoint="PUTapi-v1-profiles--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>quiet_time_to</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="quiet_time_to" data-endpoint="PUTapi-v1-profiles--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>avatar_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="avatar_path" data-endpoint="PUTapi-v1-profiles--id-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/profiles/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/profiles/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-profiles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-profiles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-profiles--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-profiles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-profiles--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-profiles--id-" data-method="DELETE" data-path="api/v1/profiles/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-profiles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-profiles--id-" onclick="tryItOut('DELETEapi-v1-profiles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-profiles--id-" onclick="cancelTryOut('DELETEapi-v1-profiles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-profiles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/profiles/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-profiles--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/companyUsers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/companyUsers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "List of Company Users.",
 "data": [
   {
    'id' => 15,
    'name' => '1test',
    'email' => '1test@example.com',
    'email_verified_at' => NULL,
    'status' => 'active',
    'type' => 'premium',
    'created_at' => NULL,
    'updated_at' => NULL,
    'pivot':{'company_id':1,'user_id':15}
    }
 ]
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent"
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-companyUsers" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-companyUsers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-companyUsers"></code></pre>
</div>
<div id="execution-error-GETapi-v1-companyUsers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-companyUsers"></code></pre>
</div>
<form id="form-GETapi-v1-companyUsers" data-method="GET" data-path="api/v1/companyUsers" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-companyUsers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-companyUsers" onclick="tryItOut('GETapi-v1-companyUsers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-companyUsers" onclick="cancelTryOut('GETapi-v1-companyUsers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-companyUsers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/companyUsers</code></b>
</p>
<p>
<label id="auth-GETapi-v1-companyUsers" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-companyUsers" data-component="header"></label>
</p>
</form>


## api/v1/companyUsers/by-tenant/{id}




> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/companyUsers/by-tenant/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/companyUsers/by-tenant/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-companyUsers-by-tenant--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-companyUsers-by-tenant--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-companyUsers-by-tenant--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-companyUsers-by-tenant--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-companyUsers-by-tenant--id-"></code></pre>
</div>
<form id="form-GETapi-v1-companyUsers-by-tenant--id-" data-method="GET" data-path="api/v1/companyUsers/by-tenant/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-companyUsers-by-tenant--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-companyUsers-by-tenant--id-" onclick="tryItOut('GETapi-v1-companyUsers-by-tenant--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-companyUsers-by-tenant--id-" onclick="cancelTryOut('GETapi-v1-companyUsers-by-tenant--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-companyUsers-by-tenant--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/companyUsers/by-tenant/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-companyUsers-by-tenant--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/companyUsers/dolore?id=20" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/companyUsers/dolore"
);

let params = {
    "id": "20",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Got Specific Company User.",
 "data": {
    'id' => 15,
    'name' => '1test',
    'email' => '1test@example.com',
    'email_verified_at' => NULL,
    'status' => 'active',
    'type' => 'premium',
    'created_at' => NULL,
    'updated_at' => NULL,
    'pivot':{'company_id':1,'user_id':15}
   }
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Not found",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent."
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-companyUsers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-companyUsers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-companyUsers--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-companyUsers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-companyUsers--id-"></code></pre>
</div>
<form id="form-GETapi-v1-companyUsers--id-" data-method="GET" data-path="api/v1/companyUsers/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-companyUsers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-companyUsers--id-" onclick="tryItOut('GETapi-v1-companyUsers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-companyUsers--id-" onclick="cancelTryOut('GETapi-v1-companyUsers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-companyUsers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/companyUsers/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-companyUsers--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-companyUsers--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-companyUsers--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-companyUsers--id-" data-component="query"  hidden>
<br>
User ID</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/companyUsers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"company_id":13,"user_id":7,"company":"ad"}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/companyUsers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "company_id": 13,
    "user_id": 7,
    "company": "ad"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new Company User.",
 "data": [
    "id":7,
    "company_id":1,
    "user_id":1,
    "created_at":null,
    "updated_at":null
 ]
}
```
> Example response (460):

```json
{
    "success": false,
    "code": 460,
    "message": "Wrong ID.",
    "data": null
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "name":["The name field is required."],
 }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent."
}
```
> Example response (500):

```json
{
    "success": false,
    "code": 500,
    "message": "Failed new Company User creation.",
    "data": null
}
```
<div id="execution-results-POSTapi-v1-companyUsers" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-companyUsers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-companyUsers"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-companyUsers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-companyUsers"></code></pre>
</div>
<form id="form-POSTapi-v1-companyUsers" data-method="POST" data-path="api/v1/companyUsers" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-companyUsers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-companyUsers" onclick="tryItOut('POSTapi-v1-companyUsers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-companyUsers" onclick="cancelTryOut('POSTapi-v1-companyUsers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-companyUsers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/companyUsers</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>company_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="company_id" data-endpoint="POSTapi-v1-companyUsers" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-v1-companyUsers" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>company</code></b>&nbsp;&nbsp;<small>user.user_id</small>     <i>optional</i> &nbsp;
<input type="text" name="company" data-endpoint="POSTapi-v1-companyUsers" data-component="body"  hidden>
<br>
integer required The user id which store in
            company user table</p>

</form>


## api/v1/companyUsers/{id}




> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/companyUsers/mollitia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"company_id":16,"user_id":2}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/companyUsers/mollitia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "company_id": 16,
    "user_id": 2
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-companyUsers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-companyUsers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-companyUsers--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-companyUsers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-companyUsers--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-companyUsers--id-" data-method="PUT" data-path="api/v1/companyUsers/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-companyUsers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-companyUsers--id-" onclick="tryItOut('PUTapi-v1-companyUsers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-companyUsers--id-" onclick="cancelTryOut('PUTapi-v1-companyUsers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-companyUsers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/companyUsers/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-companyUsers--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>company_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="company_id" data-endpoint="PUTapi-v1-companyUsers--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-v1-companyUsers--id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/companyUsers/beatae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/companyUsers/beatae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Deleted The Company User.",
    "data": null
}
```
> Example response (460):

```json
{
    "success": false,
    "code": 460,
    "message": "Wrong ID.",
    "data": null
}
```
> Example response (403):

```json

{
 "success": false,
 "code": 403,
 "message": "Permission is absent.",
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
> Example response (500):

```json
{
    "success": false,
    "code": 500,
    "message": "Failed The Company User Delete.",
    "data": null
}
```
<div id="execution-results-DELETEapi-v1-companyUsers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-companyUsers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-companyUsers--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-companyUsers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-companyUsers--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-companyUsers--id-" data-method="DELETE" data-path="api/v1/companyUsers/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-companyUsers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-companyUsers--id-" onclick="tryItOut('DELETEapi-v1-companyUsers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-companyUsers--id-" onclick="cancelTryOut('DELETEapi-v1-companyUsers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-companyUsers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/companyUsers/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-companyUsers--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-companyUsers--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-companyUsers--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/notes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/notes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "List of Notes.",
 "data": {
   {
     "id": 1,
     "pathway_id": null,
     "user_id": 21,
     "is_favourite": 0,
     "title": null,
     "text": null,
     "audio": null,
     "remind_at": null,
     "created_at": null,
     "updated_at": null,
     "tags": [
       {
         "id": 2,
         "name": "tag-1-1-2",
         "department_id": 1,
         "created_at": null,
         "updated_at": null,
         "pivot": {
           "note_id": 1,
           "tag_id": 2
         }
       }
     ]
   }
 }
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-notes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-notes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-notes"></code></pre>
</div>
<div id="execution-error-GETapi-v1-notes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-notes"></code></pre>
</div>
<form id="form-GETapi-v1-notes" data-method="GET" data-path="api/v1/notes" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-notes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-notes" onclick="tryItOut('GETapi-v1-notes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-notes" onclick="cancelTryOut('GETapi-v1-notes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-notes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/notes</code></b>
</p>
<p>
<label id="auth-GETapi-v1-notes" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-notes" data-component="header"></label>
</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/notes/aut?id=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/notes/aut"
);

let params = {
    "id": "3",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Got Specific Notes.",
 "data": {
     "id": 1,
     "pathway_id": null,
     "user_id": 21,
     "is_favourite": 0,
     "title": null,
     "text": null,
     "audio": null,
     "remind_at": null,
     "created_at": null,
     "updated_at": null,
     "tags": [
       {
         "id": 2,
         "name": "tag-1-1-2",
         "department_id": 1,
         "created_at": null,
         "updated_at": null,
         "pivot": {
           "note_id": 1,
           "tag_id": 2
         }
       }
     ]
  }
}

 @response   404 {
 "success": false,
 "code": 404,
 "message": "Not found",
 "data": null
 }
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-notes--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-notes--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-notes--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-notes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-notes--id-"></code></pre>
</div>
<form id="form-GETapi-v1-notes--id-" data-method="GET" data-path="api/v1/notes/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-notes--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-notes--id-" onclick="tryItOut('GETapi-v1-notes--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-notes--id-" onclick="cancelTryOut('GETapi-v1-notes--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-notes--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/notes/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-notes--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-notes--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-notes--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-notes--id-" data-component="query"  hidden>
<br>
Note ID</p>
</form>


## Store a newly created note

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/notes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"is_favourite":false,"pathway_id":12,"title":"magnam","text":"modi","audio":{},"remind_at":"quia","tags":[1,17],"note":{"pathway_id":15,"title":"porro","text":"qui","audio":"sed","remind_at":"est","is_favourite":false,"tags":"labore"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/notes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "is_favourite": false,
    "pathway_id": 12,
    "title": "magnam",
    "text": "modi",
    "audio": {},
    "remind_at": "quia",
    "tags": [
        1,
        17
    ],
    "note": {
        "pathway_id": 15,
        "title": "porro",
        "text": "qui",
        "audio": "sed",
        "remind_at": "est",
        "is_favourite": false,
        "tags": "labore"
    }
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Created new Note.",
    "data": [
        {
            "id": 1,
            "pathway_id": null,
            "user_id": 21,
            "is_favourite": 0,
            "title": null,
            "text": null,
            "audio": null,
            "remind_at": null,
            "created_at": null,
            "updated_at": null,
            "tags": [
                {
                    "id": 2,
                    "name": "tag-1-1-2",
                    "department_id": 1,
                    "created_at": null,
                    "updated_at": null,
                    "pivot": {
                        "note_id": 1,
                        "tag_id": 2
                    }
                }
            ]
        }
    ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "pathway_id":["The pathway_id field must be an integer."],
  "title":["The title field must be a string."],
  "text":["The text field must be a string."],
  "audio":["The audio field is must be a audio."],
  "remind_at":["The remind_at field must be a string."],
  "tags":["The tags field must be an array.],
  "is_favourite":["The is_favourite field must be a boolean.],
 }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-v1-notes" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-notes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-notes"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-notes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-notes"></code></pre>
</div>
<form id="form-POSTapi-v1-notes" data-method="POST" data-path="api/v1/notes" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-notes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-notes" onclick="tryItOut('POSTapi-v1-notes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-notes" onclick="cancelTryOut('POSTapi-v1-notes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-notes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/notes</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-notes" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-notes" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>is_favourite</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-v1-notes" hidden><input type="radio" name="is_favourite" value="true" data-endpoint="POSTapi-v1-notes" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-v1-notes" hidden><input type="radio" name="is_favourite" value="false" data-endpoint="POSTapi-v1-notes" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>pathway_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="pathway_id" data-endpoint="POSTapi-v1-notes" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-v1-notes" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>text</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="text" data-endpoint="POSTapi-v1-notes" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>audio</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="audio" data-endpoint="POSTapi-v1-notes" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>remind_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="remind_at" data-endpoint="POSTapi-v1-notes" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>tags</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="tags.0" data-endpoint="POSTapi-v1-notes" data-component="body"  hidden>
<input type="number" name="tags.1" data-endpoint="POSTapi-v1-notes" data-component="body" hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>note</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The note object</summary>
<br>
<p>
<b><code>note.pathway_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="note.pathway_id" data-endpoint="POSTapi-v1-notes" data-component="body"  hidden>
<br>
nullable The patway_id parameter of the note</p>
<p>
<b><code>note.title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="note.title" data-endpoint="POSTapi-v1-notes" data-component="body"  hidden>
<br>
nullable The title parameter of the note</p>
<p>
<b><code>note.text</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="note.text" data-endpoint="POSTapi-v1-notes" data-component="body"  hidden>
<br>
nullable The text parameter of the note</p>
<p>
<b><code>note.audio</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="note.audio" data-endpoint="POSTapi-v1-notes" data-component="body"  hidden>
<br>
nullable The audio file of the mime type audio/mpeg</p>
<p>
<b><code>note.remind_at</code></b>&nbsp;&nbsp;<small>nullable</small>     <i>optional</i> &nbsp;
<input type="text" name="note.remind_at" data-endpoint="POSTapi-v1-notes" data-component="body"  hidden>
<br>
string The status remind_at of the note</p>
<p>
<b><code>note.is_favourite</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-v1-notes" hidden><input type="radio" name="note.is_favourite" value="true" data-endpoint="POSTapi-v1-notes" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-v1-notes" hidden><input type="radio" name="note.is_favourite" value="false" data-endpoint="POSTapi-v1-notes" data-component="body" ><code>false</code></label>
<br>
The is_favourite remind_at of the note</p>
<p>
<b><code>note.tags</code></b>&nbsp;&nbsp;<small>array</small>     <i>optional</i> &nbsp;
<input type="text" name="note.tags" data-endpoint="POSTapi-v1-notes" data-component="body"  hidden>
<br>
The tags parameter of the note, array of tags id's</p>
</details>
</p>

</form>


## Update the is favourite field of the specified note in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/notes/favourite/molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"is_favourite":false,"note":{"is_favourite":false}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/notes/favourite/molestiae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "is_favourite": false,
    "note": {
        "is_favourite": false
    }
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Updated the Note.",
    "data": [
        {
            "id": 1,
            "pathway_id": null,
            "user_id": 21,
            "is_favourite": 0,
            "title": null,
            "text": null,
            "audio": null,
            "remind_at": null,
            "created_at": null,
            "updated_at": null,
            "tags": [
                {
                    "id": 2,
                    "name": "tag-1-1-2",
                    "department_id": 1,
                    "created_at": null,
                    "updated_at": null,
                    "pivot": {
                        "note_id": 1,
                        "tag_id": 2
                    }
                }
            ]
        }
    ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "is_favourite":["The is_favourite field must be a boolean.],
 }
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Not found",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-PUTapi-v1-notes-favourite--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-notes-favourite--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-notes-favourite--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-notes-favourite--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-notes-favourite--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-notes-favourite--id-" data-method="PUT" data-path="api/v1/notes/favourite/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-notes-favourite--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-notes-favourite--id-" onclick="tryItOut('PUTapi-v1-notes-favourite--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-notes-favourite--id-" onclick="cancelTryOut('PUTapi-v1-notes-favourite--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-notes-favourite--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/notes/favourite/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-notes-favourite--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-notes-favourite--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-notes-favourite--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>is_favourite</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTapi-v1-notes-favourite--id-" hidden><input type="radio" name="is_favourite" value="true" data-endpoint="PUTapi-v1-notes-favourite--id-" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTapi-v1-notes-favourite--id-" hidden><input type="radio" name="is_favourite" value="false" data-endpoint="PUTapi-v1-notes-favourite--id-" data-component="body" required ><code>false</code></label>
<br>
</p>
<p>
<details>
<summary>
<b><code>note</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The note object</summary>
<br>
<p>
<b><code>note.is_favourite</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-notes-favourite--id-" hidden><input type="radio" name="note.is_favourite" value="true" data-endpoint="PUTapi-v1-notes-favourite--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-notes-favourite--id-" hidden><input type="radio" name="note.is_favourite" value="false" data-endpoint="PUTapi-v1-notes-favourite--id-" data-component="body" ><code>false</code></label>
<br>
The is_favourite remind_at of the note</p>
</details>
</p>

</form>


## Update the specified note in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/notes/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"is_favourite":false,"pathway_id":4,"title":"voluptas","text":"non","audio":{},"remind_at":"enim","tags":[17,18],"note":{"pathway_id":15,"title":"placeat","text":"quos","audio":"nobis","remind_at":"dolores","is_favourite":false,"tags":"culpa"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/notes/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "is_favourite": false,
    "pathway_id": 4,
    "title": "voluptas",
    "text": "non",
    "audio": {},
    "remind_at": "enim",
    "tags": [
        17,
        18
    ],
    "note": {
        "pathway_id": 15,
        "title": "placeat",
        "text": "quos",
        "audio": "nobis",
        "remind_at": "dolores",
        "is_favourite": false,
        "tags": "culpa"
    }
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Updated the Note.",
    "data": [
        {
            "id": 1,
            "pathway_id": null,
            "user_id": 21,
            "is_favourite": 0,
            "title": null,
            "text": null,
            "audio": null,
            "remind_at": null,
            "created_at": null,
            "updated_at": null,
            "tags": [
                {
                    "id": 2,
                    "name": "tag-1-1-2",
                    "department_id": 1,
                    "created_at": null,
                    "updated_at": null,
                    "pivot": {
                        "note_id": 1,
                        "tag_id": 2
                    }
                }
            ]
        }
    ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "pathway_id":["The pathway_id field must be an integer."],
  "title":["The title field must be a string."],
  "text":["The text field must be a string."],
  "audio":["The audio field is must be a audio."],
  "remind_at":["The remind_at field must be a string."],
  "tags":["The tags field must be an array.],
  "is_favourite":["The is_favourite field must be a boolean.],
 }
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Not found",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-PUTapi-v1-notes--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-notes--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-notes--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-notes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-notes--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-notes--id-" data-method="PUT" data-path="api/v1/notes/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-notes--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-notes--id-" onclick="tryItOut('PUTapi-v1-notes--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-notes--id-" onclick="cancelTryOut('PUTapi-v1-notes--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-notes--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/notes/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-notes--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-notes--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-notes--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>is_favourite</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-notes--id-" hidden><input type="radio" name="is_favourite" value="true" data-endpoint="PUTapi-v1-notes--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-notes--id-" hidden><input type="radio" name="is_favourite" value="false" data-endpoint="PUTapi-v1-notes--id-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>pathway_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="pathway_id" data-endpoint="PUTapi-v1-notes--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-v1-notes--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>text</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="text" data-endpoint="PUTapi-v1-notes--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>audio</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="audio" data-endpoint="PUTapi-v1-notes--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>remind_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="remind_at" data-endpoint="PUTapi-v1-notes--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>tags</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="tags.0" data-endpoint="PUTapi-v1-notes--id-" data-component="body"  hidden>
<input type="number" name="tags.1" data-endpoint="PUTapi-v1-notes--id-" data-component="body" hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>note</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The note object</summary>
<br>
<p>
<b><code>note.pathway_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="note.pathway_id" data-endpoint="PUTapi-v1-notes--id-" data-component="body"  hidden>
<br>
nullable The patway_id parameter of the note</p>
<p>
<b><code>note.title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="note.title" data-endpoint="PUTapi-v1-notes--id-" data-component="body"  hidden>
<br>
nullable The title parameter of the note</p>
<p>
<b><code>note.text</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="note.text" data-endpoint="PUTapi-v1-notes--id-" data-component="body"  hidden>
<br>
nullable The text parameter of the note</p>
<p>
<b><code>note.audio</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="note.audio" data-endpoint="PUTapi-v1-notes--id-" data-component="body"  hidden>
<br>
nullable The audio file of the mime type audio/mpeg</p>
<p>
<b><code>note.remind_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="note.remind_at" data-endpoint="PUTapi-v1-notes--id-" data-component="body"  hidden>
<br>
nullable The status remind_at of the note</p>
<p>
<b><code>note.is_favourite</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-notes--id-" hidden><input type="radio" name="note.is_favourite" value="true" data-endpoint="PUTapi-v1-notes--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-notes--id-" hidden><input type="radio" name="note.is_favourite" value="false" data-endpoint="PUTapi-v1-notes--id-" data-component="body" ><code>false</code></label>
<br>
The is_favourite remind_at of the note</p>
<p>
<b><code>note.tags</code></b>&nbsp;&nbsp;<small>array</small>     <i>optional</i> &nbsp;
<input type="text" name="note.tags" data-endpoint="PUTapi-v1-notes--id-" data-component="body"  hidden>
<br>
The tags parameter of the note, array of tags id's</p>
</details>
</p>

</form>


## Remove the specified note.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/notes/dolor?int=sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/notes/dolor"
);

let params = {
    "int": "sunt",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Deleted The Note.",
 "data": null
}

 @response   404 {
 "success": false,
 "code": 404,
 "message": "Not found",
 "data": null
 }
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-DELETEapi-v1-notes--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-notes--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-notes--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-notes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-notes--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-notes--id-" data-method="DELETE" data-path="api/v1/notes/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-notes--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-notes--id-" onclick="tryItOut('DELETEapi-v1-notes--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-notes--id-" onclick="cancelTryOut('DELETEapi-v1-notes--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-notes--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/notes/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-notes--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-notes--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-notes--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="int" data-endpoint="DELETEapi-v1-notes--id-" data-component="query"  hidden>
<br>
$id</p>
</form>


## Display a listing of all widgets Image Answer .

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widget-image-answer" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-image-answer"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "List of widgets Image Answer.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'questions'      => {
          "sets":
             [
                 {
                     "order": 1,
                     "question": "Question Media Answer 1. Text.",
                     "answers":
                         [
                             {
                                 "order": 1,
                                 "media": "modules/media_question/19-343x219.png",
                                 "text": "Answer for Question Media Answer 1."
                             }
                         ]
                 }
             ]
     },
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_image_answer/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widget-image-answer" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widget-image-answer"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widget-image-answer"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widget-image-answer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widget-image-answer"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widget-image-answer" data-method="GET" data-path="api/cms/v1/widget-image-answer" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widget-image-answer', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widget-image-answer" onclick="tryItOut('GETapi-cms-v1-widget-image-answer');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widget-image-answer" onclick="cancelTryOut('GETapi-cms-v1-widget-image-answer');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widget-image-answer" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widget-image-answer</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widget-image-answer" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widget-image-answer" data-component="header"></label>
</p>
</form>


## Display the specified widget Image Answer.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widget-image-answer/ipsa?id=20" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-image-answer/ipsa"
);

let params = {
    "id": "20",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Got Specific widget Image Answer.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'questions'      => {
          "sets":
             [
                 {
                     "order": 1,
                     "question": "Question Media Answer 1. Text.",
                     "answers":
                         [
                             {
                                 "order": 1,
                                 "media": "modules/media_question/19-343x219.png",
                                 "text": "Answer for Question Media Answer 1."
                             }
                         ]
                 }
             ]
 },
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_image_answer/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Not Found",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widget-image-answer--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widget-image-answer--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widget-image-answer--id-"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widget-image-answer--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widget-image-answer--id-"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widget-image-answer--id-" data-method="GET" data-path="api/cms/v1/widget-image-answer/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widget-image-answer--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widget-image-answer--id-" onclick="tryItOut('GETapi-cms-v1-widget-image-answer--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widget-image-answer--id-" onclick="cancelTryOut('GETapi-cms-v1-widget-image-answer--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widget-image-answer--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widget-image-answer/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widget-image-answer--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widget-image-answer--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-cms-v1-widget-image-answer--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-cms-v1-widget-image-answer--id-" data-component="query"  hidden>
<br>
widgets Imag Answer ID</p>
</form>


## Store a newly created  widget Image Answer

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/cms/v1/widget-image-answer" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d ''

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-image-answer"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = 

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new widget Image Answer.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'questions'      => {
          "sets":
             [
                 {
                     "order": 1,
                     "question": "Question Media Answer 1. Text.",
                     "answers":
                         [
                             {
                                 "order": 1,
                                 "media": "modules/media_question/19-343x219.png",
                                 "text": "Answer for Question Media Answer 1."
                             }
                         ]
                 }
             ]
 },
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_image_answer/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "message": "The given data was invalid.",
        "errors": {
            "questions": [
                "The questions field is required."
            ],
            "button_text": [
                "The button text field is required."
            ],
            "settings": [
                "The settings field is required."
            ],
            "settings.header_img": [
                "The settings.header img field is required."
            ]
        }
    }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-cms-v1-widget-image-answer" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-cms-v1-widget-image-answer"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cms-v1-widget-image-answer"></code></pre>
</div>
<div id="execution-error-POSTapi-cms-v1-widget-image-answer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cms-v1-widget-image-answer"></code></pre>
</div>
<form id="form-POSTapi-cms-v1-widget-image-answer" data-method="POST" data-path="api/cms/v1/widget-image-answer" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-cms-v1-widget-image-answer', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-cms-v1-widget-image-answer" onclick="tryItOut('POSTapi-cms-v1-widget-image-answer');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-cms-v1-widget-image-answer" onclick="cancelTryOut('POSTapi-cms-v1-widget-image-answer');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-cms-v1-widget-image-answer" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/cms/v1/widget-image-answer</code></b>
</p>
<p>
<label id="auth-POSTapi-cms-v1-widget-image-answer" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-cms-v1-widget-image-answer" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<details>
<summary>
<b><code>questions</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The questions object</summary>
<br>
<p>
<b><code>questions.order</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="questions.order" data-endpoint="POSTapi-cms-v1-widget-image-answer" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>questions.question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="questions.question" data-endpoint="POSTapi-cms-v1-widget-image-answer" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>questions.answers</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
</summary>
<br>
<p>
<b><code>questions.answers.order</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="questions.answers.order" data-endpoint="POSTapi-cms-v1-widget-image-answer" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>questions.answers.media</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="questions.answers.media" data-endpoint="POSTapi-cms-v1-widget-image-answer" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>questions.answers.text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="questions.answers.text" data-endpoint="POSTapi-cms-v1-widget-image-answer" data-component="body" required  hidden>
<br>
</p>
</details>
</p>

</details>
</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="POSTapi-cms-v1-widget-image-answer" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>settings</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The settings object</summary>
<br>
<p>
<b><code>settings.header_img</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="settings.header_img" data-endpoint="POSTapi-cms-v1-widget-image-answer" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.completion_time</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="settings.completion_time" data-endpoint="POSTapi-cms-v1-widget-image-answer" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.require_header_image</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-cms-v1-widget-image-answer" hidden><input type="radio" name="settings.require_header_image" value="true" data-endpoint="POSTapi-cms-v1-widget-image-answer" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-cms-v1-widget-image-answer" hidden><input type="radio" name="settings.require_header_image" value="false" data-endpoint="POSTapi-cms-v1-widget-image-answer" data-component="body" ><code>false</code></label>
<br>
</p>
</details>
</p>

</form>


## Update the specified widget Image Answer

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/cms/v1/widget-image-answer/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d ''

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-image-answer/vel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = 

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new widget Image Answer.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'questions'      => {
          "sets":
             [
                 {
                     "order": 1,
                     "question": "Question Media Answer 1. Text.",
                     "answers":
                         [
                             {
                                 "order": 1,
                                 "media": "modules/media_question/19-343x219.png",
                                 "text": "Answer for Question Media Answer 1."
                             }
                         ]
                 }
             ]
 },
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_image_answer/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "message": "The given data was invalid.",
        "errors": {
            "questions": [
                "The questions field is required."
            ],
            "button_text": [
                "The button text field is required."
            ],
            "settings": [
                "The settings field is required."
            ],
            "settings.header_img": [
                "The settings.header img field is required."
            ]
        }
    }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-PUTapi-cms-v1-widget-image-answer--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-cms-v1-widget-image-answer--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cms-v1-widget-image-answer--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-cms-v1-widget-image-answer--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cms-v1-widget-image-answer--id-"></code></pre>
</div>
<form id="form-PUTapi-cms-v1-widget-image-answer--id-" data-method="PUT" data-path="api/cms/v1/widget-image-answer/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-cms-v1-widget-image-answer--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-cms-v1-widget-image-answer--id-" onclick="tryItOut('PUTapi-cms-v1-widget-image-answer--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-cms-v1-widget-image-answer--id-" onclick="cancelTryOut('PUTapi-cms-v1-widget-image-answer--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-cms-v1-widget-image-answer--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/cms/v1/widget-image-answer/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-cms-v1-widget-image-answer--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<details>
<summary>
<b><code>questions</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The questions object</summary>
<br>
<p>
<b><code>questions.order</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="questions.order" data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>questions.question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="questions.question" data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>questions.answers</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
</summary>
<br>
<p>
<b><code>questions.answers.order</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="questions.answers.order" data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>questions.answers.media</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="questions.answers.media" data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>questions.answers.text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="questions.answers.text" data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" data-component="body" required  hidden>
<br>
</p>
</details>
</p>

</details>
</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>settings</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The settings object</summary>
<br>
<p>
<b><code>settings.header_img</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="settings.header_img" data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.completion_time</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="settings.completion_time" data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.require_header_image</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" hidden><input type="radio" name="settings.require_header_image" value="true" data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" hidden><input type="radio" name="settings.require_header_image" value="false" data-endpoint="PUTapi-cms-v1-widget-image-answer--id-" data-component="body" ><code>false</code></label>
<br>
</p>
</details>
</p>

</form>


## Remove the specified widget Image Answer.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/cms/v1/widget-image-answer/dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-image-answer/dolorem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Deleted The widget Image Answer.",
 "data": null
}

* @response   404 {
 "success": false,
 "code": 404,
 "message": "Not found",
 "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-DELETEapi-cms-v1-widget-image-answer--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-cms-v1-widget-image-answer--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cms-v1-widget-image-answer--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-cms-v1-widget-image-answer--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cms-v1-widget-image-answer--id-"></code></pre>
</div>
<form id="form-DELETEapi-cms-v1-widget-image-answer--id-" data-method="DELETE" data-path="api/cms/v1/widget-image-answer/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cms-v1-widget-image-answer--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-cms-v1-widget-image-answer--id-" onclick="tryItOut('DELETEapi-cms-v1-widget-image-answer--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-cms-v1-widget-image-answer--id-" onclick="cancelTryOut('DELETEapi-cms-v1-widget-image-answer--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-cms-v1-widget-image-answer--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/cms/v1/widget-image-answer/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-cms-v1-widget-image-answer--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-cms-v1-widget-image-answer--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-cms-v1-widget-image-answer--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of all widgets Article .

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widget-article" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-article"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "List of widgets Article.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'questions'      => "body"
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_article/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widget-article" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widget-article"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widget-article"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widget-article" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widget-article"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widget-article" data-method="GET" data-path="api/cms/v1/widget-article" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widget-article', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widget-article" onclick="tryItOut('GETapi-cms-v1-widget-article');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widget-article" onclick="cancelTryOut('GETapi-cms-v1-widget-article');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widget-article" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widget-article</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widget-article" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widget-article" data-component="header"></label>
</p>
</form>


## Display the specified widget Artiicle.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widget-article/velit?id=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-article/velit"
);

let params = {
    "id": "2",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Got Specific widget Article.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'body'      => "body"
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_article/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Not Found",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widget-article--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widget-article--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widget-article--id-"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widget-article--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widget-article--id-"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widget-article--id-" data-method="GET" data-path="api/cms/v1/widget-article/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widget-article--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widget-article--id-" onclick="tryItOut('GETapi-cms-v1-widget-article--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widget-article--id-" onclick="cancelTryOut('GETapi-cms-v1-widget-article--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widget-article--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widget-article/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widget-article--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widget-article--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-cms-v1-widget-article--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-cms-v1-widget-article--id-" data-component="query"  hidden>
<br>
widgets Imag Answer ID</p>
</form>


## Store a newly created  widget Article

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/cms/v1/widget-article" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d ''

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-article"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = 

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new widget Article.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'body'      => "Body"
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_article/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "message": "The given data was invalid.",
        "errors": {
            "body": [
                "The body field is required."
            ]
        }
    }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-cms-v1-widget-article" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-cms-v1-widget-article"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cms-v1-widget-article"></code></pre>
</div>
<div id="execution-error-POSTapi-cms-v1-widget-article" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cms-v1-widget-article"></code></pre>
</div>
<form id="form-POSTapi-cms-v1-widget-article" data-method="POST" data-path="api/cms/v1/widget-article" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-cms-v1-widget-article', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-cms-v1-widget-article" onclick="tryItOut('POSTapi-cms-v1-widget-article');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-cms-v1-widget-article" onclick="cancelTryOut('POSTapi-cms-v1-widget-article');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-cms-v1-widget-article" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/cms/v1/widget-article</code></b>
</p>
<p>
<label id="auth-POSTapi-cms-v1-widget-article" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-cms-v1-widget-article" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="POSTapi-cms-v1-widget-article" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="POSTapi-cms-v1-widget-article" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>settings</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The settings object</summary>
<br>
<p>
<b><code>settings.header_img</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="settings.header_img" data-endpoint="POSTapi-cms-v1-widget-article" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.completion_time</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="settings.completion_time" data-endpoint="POSTapi-cms-v1-widget-article" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.require_header_image</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-cms-v1-widget-article" hidden><input type="radio" name="settings.require_header_image" value="true" data-endpoint="POSTapi-cms-v1-widget-article" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-cms-v1-widget-article" hidden><input type="radio" name="settings.require_header_image" value="false" data-endpoint="POSTapi-cms-v1-widget-article" data-component="body" ><code>false</code></label>
<br>
</p>
</details>
</p>

</form>


## Update the specified widget Article

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/cms/v1/widget-article/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d ''

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-article/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = 

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new widget Article.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'body'      => "Body"
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_article/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "message": "The given data was invalid.",
        "errors": {
            "body": [
                "The body field is required."
            ]
        }
    }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-PUTapi-cms-v1-widget-article--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-cms-v1-widget-article--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cms-v1-widget-article--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-cms-v1-widget-article--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cms-v1-widget-article--id-"></code></pre>
</div>
<form id="form-PUTapi-cms-v1-widget-article--id-" data-method="PUT" data-path="api/cms/v1/widget-article/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-cms-v1-widget-article--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-cms-v1-widget-article--id-" onclick="tryItOut('PUTapi-cms-v1-widget-article--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-cms-v1-widget-article--id-" onclick="cancelTryOut('PUTapi-cms-v1-widget-article--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-cms-v1-widget-article--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/cms/v1/widget-article/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-cms-v1-widget-article--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-cms-v1-widget-article--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-cms-v1-widget-article--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="PUTapi-cms-v1-widget-article--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="PUTapi-cms-v1-widget-article--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>settings</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The settings object</summary>
<br>
<p>
<b><code>settings.header_img</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="settings.header_img" data-endpoint="PUTapi-cms-v1-widget-article--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.completion_time</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="settings.completion_time" data-endpoint="PUTapi-cms-v1-widget-article--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.require_header_image</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-cms-v1-widget-article--id-" hidden><input type="radio" name="settings.require_header_image" value="true" data-endpoint="PUTapi-cms-v1-widget-article--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-cms-v1-widget-article--id-" hidden><input type="radio" name="settings.require_header_image" value="false" data-endpoint="PUTapi-cms-v1-widget-article--id-" data-component="body" ><code>false</code></label>
<br>
</p>
</details>
</p>

</form>


## Remove the specified widget Article.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/cms/v1/widget-article/tempore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-article/tempore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Deleted The widget Article.",
 "data": null
}

* @response   404 {
 "success": false,
 "code": 404,
 "message": "Not found",
 "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-DELETEapi-cms-v1-widget-article--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-cms-v1-widget-article--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cms-v1-widget-article--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-cms-v1-widget-article--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cms-v1-widget-article--id-"></code></pre>
</div>
<form id="form-DELETEapi-cms-v1-widget-article--id-" data-method="DELETE" data-path="api/cms/v1/widget-article/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cms-v1-widget-article--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-cms-v1-widget-article--id-" onclick="tryItOut('DELETEapi-cms-v1-widget-article--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-cms-v1-widget-article--id-" onclick="cancelTryOut('DELETEapi-cms-v1-widget-article--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-cms-v1-widget-article--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/cms/v1/widget-article/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-cms-v1-widget-article--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-cms-v1-widget-article--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-cms-v1-widget-article--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of all widgets Media .

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widget-media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "List of widgets Media.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'body'      => "body"
    'media'      => "idget_media/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg"
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_media/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widget-media" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widget-media"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widget-media"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widget-media" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widget-media"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widget-media" data-method="GET" data-path="api/cms/v1/widget-media" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widget-media', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widget-media" onclick="tryItOut('GETapi-cms-v1-widget-media');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widget-media" onclick="cancelTryOut('GETapi-cms-v1-widget-media');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widget-media" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widget-media</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widget-media" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widget-media" data-component="header"></label>
</p>
</form>


## Display the specified widget Artiicle.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widget-media/voluptatem?id=18" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-media/voluptatem"
);

let params = {
    "id": "18",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Got Specific widget Media.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'body'      => "body"
    'media'      => "idget_media/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.mp3"
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_media/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Not Found",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widget-media--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widget-media--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widget-media--id-"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widget-media--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widget-media--id-"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widget-media--id-" data-method="GET" data-path="api/cms/v1/widget-media/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widget-media--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widget-media--id-" onclick="tryItOut('GETapi-cms-v1-widget-media--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widget-media--id-" onclick="cancelTryOut('GETapi-cms-v1-widget-media--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widget-media--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widget-media/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widget-media--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widget-media--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-cms-v1-widget-media--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-cms-v1-widget-media--id-" data-component="query"  hidden>
<br>
widgets Imag Answer ID</p>
</form>


## Store a newly created  widget Media

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/cms/v1/widget-media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d ''

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = 

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new widget Media.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'body'      => "Body"
    'media'      => "widget_media/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.mp3"
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_media/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
     "message": "The given data was invalid.",
     "errors": {
         "body": [
             "The body field is required."
         ]
         "media": [
             "The media field is required."
         ]
     }
  }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-cms-v1-widget-media" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-cms-v1-widget-media"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cms-v1-widget-media"></code></pre>
</div>
<div id="execution-error-POSTapi-cms-v1-widget-media" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cms-v1-widget-media"></code></pre>
</div>
<form id="form-POSTapi-cms-v1-widget-media" data-method="POST" data-path="api/cms/v1/widget-media" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-cms-v1-widget-media', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-cms-v1-widget-media" onclick="tryItOut('POSTapi-cms-v1-widget-media');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-cms-v1-widget-media" onclick="cancelTryOut('POSTapi-cms-v1-widget-media');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-cms-v1-widget-media" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/cms/v1/widget-media</code></b>
</p>
<p>
<label id="auth-POSTapi-cms-v1-widget-media" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-cms-v1-widget-media" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="POSTapi-cms-v1-widget-media" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="POSTapi-cms-v1-widget-media" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>settings</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The settings object</summary>
<br>
<p>
<b><code>settings.header_img</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="settings.header_img" data-endpoint="POSTapi-cms-v1-widget-media" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.completion_time</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="settings.completion_time" data-endpoint="POSTapi-cms-v1-widget-media" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.require_header_image</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-cms-v1-widget-media" hidden><input type="radio" name="settings.require_header_image" value="true" data-endpoint="POSTapi-cms-v1-widget-media" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-cms-v1-widget-media" hidden><input type="radio" name="settings.require_header_image" value="false" data-endpoint="POSTapi-cms-v1-widget-media" data-component="body" ><code>false</code></label>
<br>
</p>
</details>
</p>
<p>
<b><code>media</code></b>&nbsp;&nbsp;<small>media</small>  &nbsp;
<input type="text" name="media" data-endpoint="POSTapi-cms-v1-widget-media" data-component="body" required  hidden>
<br>
</p>

</form>


## Update the specified widget Media

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/cms/v1/widget-media/aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d ''

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-media/aperiam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = 

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new widget Media.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'body'      => "Body"
    'media'      => "widget_media/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.mp3"
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_media/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
     "message": "The given data was invalid.",
     "errors": {
         "body": [
             "The body field is required."
         ]
         "media": [
             "The media field is required."
         ]
     }
  }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-PUTapi-cms-v1-widget-media--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-cms-v1-widget-media--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cms-v1-widget-media--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-cms-v1-widget-media--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cms-v1-widget-media--id-"></code></pre>
</div>
<form id="form-PUTapi-cms-v1-widget-media--id-" data-method="PUT" data-path="api/cms/v1/widget-media/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-cms-v1-widget-media--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-cms-v1-widget-media--id-" onclick="tryItOut('PUTapi-cms-v1-widget-media--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-cms-v1-widget-media--id-" onclick="cancelTryOut('PUTapi-cms-v1-widget-media--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-cms-v1-widget-media--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/cms/v1/widget-media/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-cms-v1-widget-media--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-cms-v1-widget-media--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-cms-v1-widget-media--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="PUTapi-cms-v1-widget-media--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="PUTapi-cms-v1-widget-media--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>settings</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The settings object</summary>
<br>
<p>
<b><code>settings.header_img</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="settings.header_img" data-endpoint="PUTapi-cms-v1-widget-media--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.completion_time</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="settings.completion_time" data-endpoint="PUTapi-cms-v1-widget-media--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.require_header_image</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-cms-v1-widget-media--id-" hidden><input type="radio" name="settings.require_header_image" value="true" data-endpoint="PUTapi-cms-v1-widget-media--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-cms-v1-widget-media--id-" hidden><input type="radio" name="settings.require_header_image" value="false" data-endpoint="PUTapi-cms-v1-widget-media--id-" data-component="body" ><code>false</code></label>
<br>
</p>
</details>
</p>
<p>
<b><code>media</code></b>&nbsp;&nbsp;<small>media</small>  &nbsp;
<input type="text" name="media" data-endpoint="PUTapi-cms-v1-widget-media--id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove the specified widget Media.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/cms/v1/widget-media/corporis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-media/corporis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Deleted The widget Media.",
 "data": null
}

* @response   404 {
 "success": false,
 "code": 404,
 "message": "Not found",
 "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-DELETEapi-cms-v1-widget-media--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-cms-v1-widget-media--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cms-v1-widget-media--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-cms-v1-widget-media--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cms-v1-widget-media--id-"></code></pre>
</div>
<form id="form-DELETEapi-cms-v1-widget-media--id-" data-method="DELETE" data-path="api/cms/v1/widget-media/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cms-v1-widget-media--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-cms-v1-widget-media--id-" onclick="tryItOut('DELETEapi-cms-v1-widget-media--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-cms-v1-widget-media--id-" onclick="cancelTryOut('DELETEapi-cms-v1-widget-media--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-cms-v1-widget-media--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/cms/v1/widget-media/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-cms-v1-widget-media--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-cms-v1-widget-media--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-cms-v1-widget-media--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of all widgets Slider Question .

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widget-slider-question" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-slider-question"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "List of widgets Slider Question.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'questions'      => {
          "sets":
             [
                 {
                     "order": 1,
                     "question": "Question Answer 1. Text.",
                     "answers":
                         [
                             {
                                 "order": 1,
                                 "text": "Answer for Question Answer 1."
                             }
                         ]
                 }
             ]
     },
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_slider_question/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widget-slider-question" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widget-slider-question"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widget-slider-question"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widget-slider-question" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widget-slider-question"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widget-slider-question" data-method="GET" data-path="api/cms/v1/widget-slider-question" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widget-slider-question', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widget-slider-question" onclick="tryItOut('GETapi-cms-v1-widget-slider-question');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widget-slider-question" onclick="cancelTryOut('GETapi-cms-v1-widget-slider-question');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widget-slider-question" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widget-slider-question</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widget-slider-question" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widget-slider-question" data-component="header"></label>
</p>
</form>


## Display the specified widget Slider Question.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widget-slider-question/dignissimos?id=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-slider-question/dignissimos"
);

let params = {
    "id": "3",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Got Specific widget Slider Question.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'questions'      => {
          "sets":
             [
                 {
                     "order": 1,
                     "question": "Question Answer 1. Text.",
                     "answers":
                         [
                             {
                                 "order": 1,
                                 "text": "Answer for Question Answer 1."
                             }
                         ]
                 }
             ]
 },
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_slider_question/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Not Found",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widget-slider-question--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widget-slider-question--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widget-slider-question--id-"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widget-slider-question--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widget-slider-question--id-"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widget-slider-question--id-" data-method="GET" data-path="api/cms/v1/widget-slider-question/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widget-slider-question--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widget-slider-question--id-" onclick="tryItOut('GETapi-cms-v1-widget-slider-question--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widget-slider-question--id-" onclick="cancelTryOut('GETapi-cms-v1-widget-slider-question--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widget-slider-question--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widget-slider-question/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widget-slider-question--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widget-slider-question--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-cms-v1-widget-slider-question--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-cms-v1-widget-slider-question--id-" data-component="query"  hidden>
<br>
widgets Imag Answer ID</p>
</form>


## Store a newly created  widget Slider Question

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/cms/v1/widget-slider-question" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d ''

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-slider-question"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = 

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new widget Slider Question.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    "start_statement": "start_statement",
    "end_statement": "end_statement",
    'questions'      => {
          "sets":
             [
                 {
                     "order": 1,
                     "question": "Question Answer 1. Text.",
                     "answers":
                         [
                             {
                                 "order": 1,
                                 "text": "Answer for Question Answer 1."
                             }
                         ]
                 }
             ]
 },
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_slider_question/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "message": "The given data was invalid.",
        "errors": {
            "questions": [
                "The questions field is required."
            ],
            "button_text": [
                "The button text field is required."
            ],
            "settings": [
                "The settings field is required."
            ],
            "settings.header_img": [
                "The settings.header img field is required."
            ],
            "start_statement": [
                "The start statement field is required."
            ],
            "end_statement": [
                "The end statement field is required."
            ]
        }
    }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-cms-v1-widget-slider-question" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-cms-v1-widget-slider-question"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cms-v1-widget-slider-question"></code></pre>
</div>
<div id="execution-error-POSTapi-cms-v1-widget-slider-question" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cms-v1-widget-slider-question"></code></pre>
</div>
<form id="form-POSTapi-cms-v1-widget-slider-question" data-method="POST" data-path="api/cms/v1/widget-slider-question" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-cms-v1-widget-slider-question', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-cms-v1-widget-slider-question" onclick="tryItOut('POSTapi-cms-v1-widget-slider-question');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-cms-v1-widget-slider-question" onclick="cancelTryOut('POSTapi-cms-v1-widget-slider-question');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-cms-v1-widget-slider-question" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/cms/v1/widget-slider-question</code></b>
</p>
<p>
<label id="auth-POSTapi-cms-v1-widget-slider-question" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-cms-v1-widget-slider-question" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<details>
<summary>
<b><code>questions</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The questions object</summary>
<br>
<p>
<b><code>questions.order</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="questions.order" data-endpoint="POSTapi-cms-v1-widget-slider-question" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>questions.question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="questions.question" data-endpoint="POSTapi-cms-v1-widget-slider-question" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>questions.answers</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
</summary>
<br>
<p>
<b><code>questions.answers.order</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="questions.answers.order" data-endpoint="POSTapi-cms-v1-widget-slider-question" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>questions.answers.text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="questions.answers.text" data-endpoint="POSTapi-cms-v1-widget-slider-question" data-component="body" required  hidden>
<br>
</p>
</details>
</p>

</details>
</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="POSTapi-cms-v1-widget-slider-question" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>start_statement</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="start_statement" data-endpoint="POSTapi-cms-v1-widget-slider-question" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>end_statement</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_statement" data-endpoint="POSTapi-cms-v1-widget-slider-question" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>settings</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The settings object</summary>
<br>
<p>
<b><code>settings.header_img</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="settings.header_img" data-endpoint="POSTapi-cms-v1-widget-slider-question" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.completion_time</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="settings.completion_time" data-endpoint="POSTapi-cms-v1-widget-slider-question" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.require_header_image</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-cms-v1-widget-slider-question" hidden><input type="radio" name="settings.require_header_image" value="true" data-endpoint="POSTapi-cms-v1-widget-slider-question" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-cms-v1-widget-slider-question" hidden><input type="radio" name="settings.require_header_image" value="false" data-endpoint="POSTapi-cms-v1-widget-slider-question" data-component="body" ><code>false</code></label>
<br>
</p>
</details>
</p>

</form>


## Update the specified widget Slider Question

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/cms/v1/widget-slider-question/sequi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d ''

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-slider-question/sequi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = 

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new widget Slider Question.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    "start_statement": "start_statement",
    "end_statement": "end_statement",
    'questions'      => {
          "sets":
             [
                 {
                     "order": 1,
                     "question": "Question Answer 1. Text.",
                     "answers":
                         [
                             {
                                 "order": 1,
                                 "text": "Answer for Question Answer 1."
                             }
                         ]
                 }
             ]
 },
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_slider_question/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "message": "The given data was invalid.",
        "errors": {
            "questions": [
                "The questions field is required."
            ],
            "button_text": [
                "The button text field is required."
            ],
            "settings": [
                "The settings field is required."
            ],
            "settings.header_img": [
                "The settings.header img field is required."
            ],
            "start_statement": [
                "The start statement field is required."
            ],
            "end_statement": [
                "The end statement field is required."
            ]
        }
    }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-PUTapi-cms-v1-widget-slider-question--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-cms-v1-widget-slider-question--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cms-v1-widget-slider-question--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-cms-v1-widget-slider-question--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cms-v1-widget-slider-question--id-"></code></pre>
</div>
<form id="form-PUTapi-cms-v1-widget-slider-question--id-" data-method="PUT" data-path="api/cms/v1/widget-slider-question/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-cms-v1-widget-slider-question--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-cms-v1-widget-slider-question--id-" onclick="tryItOut('PUTapi-cms-v1-widget-slider-question--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-cms-v1-widget-slider-question--id-" onclick="cancelTryOut('PUTapi-cms-v1-widget-slider-question--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-cms-v1-widget-slider-question--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/cms/v1/widget-slider-question/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-cms-v1-widget-slider-question--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<details>
<summary>
<b><code>questions</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The questions object</summary>
<br>
<p>
<b><code>questions.order</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="questions.order" data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>questions.question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="questions.question" data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>questions.answers</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
</summary>
<br>
<p>
<b><code>questions.answers.order</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="questions.answers.order" data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>questions.answers.text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="questions.answers.text" data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" data-component="body" required  hidden>
<br>
</p>
</details>
</p>

</details>
</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>start_statement</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="start_statement" data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>end_statement</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_statement" data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>settings</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The settings object</summary>
<br>
<p>
<b><code>settings.header_img</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="settings.header_img" data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.completion_time</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="settings.completion_time" data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.require_header_image</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" hidden><input type="radio" name="settings.require_header_image" value="true" data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" hidden><input type="radio" name="settings.require_header_image" value="false" data-endpoint="PUTapi-cms-v1-widget-slider-question--id-" data-component="body" ><code>false</code></label>
<br>
</p>
</details>
</p>

</form>


## Remove the specified widget Slider Question.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/cms/v1/widget-slider-question/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-slider-question/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Deleted The widget Slider Question.",
 "data": null
}

* @response   404 {
 "success": false,
 "code": 404,
 "message": "Not found",
 "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-DELETEapi-cms-v1-widget-slider-question--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-cms-v1-widget-slider-question--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cms-v1-widget-slider-question--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-cms-v1-widget-slider-question--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cms-v1-widget-slider-question--id-"></code></pre>
</div>
<form id="form-DELETEapi-cms-v1-widget-slider-question--id-" data-method="DELETE" data-path="api/cms/v1/widget-slider-question/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cms-v1-widget-slider-question--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-cms-v1-widget-slider-question--id-" onclick="tryItOut('DELETEapi-cms-v1-widget-slider-question--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-cms-v1-widget-slider-question--id-" onclick="cancelTryOut('DELETEapi-cms-v1-widget-slider-question--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-cms-v1-widget-slider-question--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/cms/v1/widget-slider-question/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-cms-v1-widget-slider-question--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-cms-v1-widget-slider-question--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-cms-v1-widget-slider-question--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of Modules

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/modules" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/modules"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Module Index",
    "data": [
        {
            "id": 1,
            "name": "Pathway 1, Free Text Question",
            "order": 2,
            "widget_type_id": 2,
            "specific_id": 1,
            "previous_id": null,
            "created_at": null,
            "updated_at": null
        }
    ]
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-modules" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-modules"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-modules"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-modules" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-modules"></code></pre>
</div>
<form id="form-GETapi-cms-v1-modules" data-method="GET" data-path="api/cms/v1/modules" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-modules', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-modules" onclick="tryItOut('GETapi-cms-v1-modules');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-modules" onclick="cancelTryOut('GETapi-cms-v1-modules');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-modules" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/modules</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-modules" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-modules" data-component="header"></label>
</p>
</form>


## Display the module.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/modules/error" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/modules/error"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Got the module.",
    "data": {
        "id": 1,
        "name": "Pathway 1, Article",
        "order": 6,
        "widget_type_id": 6,
        "specific_id": 1,
        "previous_id": null,
        "created_at": null,
        "updated_at": null
    }
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Wrong ID.",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent."
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-modules--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-modules--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-modules--id-"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-modules--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-modules--id-"></code></pre>
</div>
<form id="form-GETapi-cms-v1-modules--id-" data-method="GET" data-path="api/cms/v1/modules/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-modules--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-modules--id-" onclick="tryItOut('GETapi-cms-v1-modules--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-modules--id-" onclick="cancelTryOut('GETapi-cms-v1-modules--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-modules--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/modules/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-modules--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-modules--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-cms-v1-modules--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Store a newly module

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/cms/v1/modules" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"in","order":11,"widget_type_id":20,"specific_id":13,"previous_id":4}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/modules"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "in",
    "order": 11,
    "widget_type_id": 20,
    "specific_id": 13,
    "previous_id": 4
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new module.",
 "data": {
     "id":1,
     "name": "Pathway 1, Article",
     "order": 6,
     "widget_type_id": 6,
     "specific_id": 1,
     "previous_id": null,
     "created_at": null,
     "updated_at": null
   }
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-cms-v1-modules" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-cms-v1-modules"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cms-v1-modules"></code></pre>
</div>
<div id="execution-error-POSTapi-cms-v1-modules" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cms-v1-modules"></code></pre>
</div>
<form id="form-POSTapi-cms-v1-modules" data-method="POST" data-path="api/cms/v1/modules" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-cms-v1-modules', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-cms-v1-modules" onclick="tryItOut('POSTapi-cms-v1-modules');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-cms-v1-modules" onclick="cancelTryOut('POSTapi-cms-v1-modules');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-cms-v1-modules" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/cms/v1/modules</code></b>
</p>
<p>
<label id="auth-POSTapi-cms-v1-modules" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-cms-v1-modules" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-cms-v1-modules" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="order" data-endpoint="POSTapi-cms-v1-modules" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>widget_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="widget_type_id" data-endpoint="POSTapi-cms-v1-modules" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>specific_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="specific_id" data-endpoint="POSTapi-cms-v1-modules" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>previous_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="previous_id" data-endpoint="POSTapi-cms-v1-modules" data-component="body"  hidden>
<br>
</p>

</form>


## Update the module.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/cms/v1/modules/distinctio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quia","order":15,"widget_type_id":18,"specific_id":1,"previous_id":4}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/modules/distinctio"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quia",
    "order": 15,
    "widget_type_id": 18,
    "specific_id": 1,
    "previous_id": 4
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Updated the module.",
    "data": {
        "id": 1,
        "name": "Pathway 1, Article",
        "order": 6,
        "widget_type_id": 6,
        "specific_id": 1,
        "previous_id": null,
        "created_at": null,
        "updated_at": null
    }
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid."
}

* @response   404 {
 "success": false,
 "code": 404,
 "message": "Wrong ID.",
 "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-PUTapi-cms-v1-modules--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-cms-v1-modules--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cms-v1-modules--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-cms-v1-modules--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cms-v1-modules--id-"></code></pre>
</div>
<form id="form-PUTapi-cms-v1-modules--id-" data-method="PUT" data-path="api/cms/v1/modules/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-cms-v1-modules--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-cms-v1-modules--id-" onclick="tryItOut('PUTapi-cms-v1-modules--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-cms-v1-modules--id-" onclick="cancelTryOut('PUTapi-cms-v1-modules--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-cms-v1-modules--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/cms/v1/modules/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-cms-v1-modules--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-cms-v1-modules--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-cms-v1-modules--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-cms-v1-modules--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="order" data-endpoint="PUTapi-cms-v1-modules--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>widget_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="widget_type_id" data-endpoint="PUTapi-cms-v1-modules--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>specific_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="specific_id" data-endpoint="PUTapi-cms-v1-modules--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>previous_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="previous_id" data-endpoint="PUTapi-cms-v1-modules--id-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified resource

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/cms/v1/modules/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/modules/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Deleted the module.",
 "data": null
}

* @response   404 {
 "success": false,
 "code": 404,
 "message": "Wrong ID.",
 "data": null
}
```
> Example response (403):

```json

{
 "success": false,
 "code": 403,
 "message": "Permission is absent.",
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-DELETEapi-cms-v1-modules--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-cms-v1-modules--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cms-v1-modules--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-cms-v1-modules--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cms-v1-modules--id-"></code></pre>
</div>
<form id="form-DELETEapi-cms-v1-modules--id-" data-method="DELETE" data-path="api/cms/v1/modules/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cms-v1-modules--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-cms-v1-modules--id-" onclick="tryItOut('DELETEapi-cms-v1-modules--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-cms-v1-modules--id-" onclick="cancelTryOut('DELETEapi-cms-v1-modules--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-cms-v1-modules--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/cms/v1/modules/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-cms-v1-modules--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-cms-v1-modules--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-cms-v1-modules--id-" data-component="url" required  hidden>
<br>
</p>
</form>



