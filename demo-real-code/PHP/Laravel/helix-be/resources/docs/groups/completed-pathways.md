# Completed Pathways

APIs for managing Courses

## Display a listing of the completed courses of the user with filters and sorts.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/mobile/v1/completed/pathways" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":17,"tag_id":19,"author":"earum","length":"consequatur"}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/mobile/v1/completed/pathways"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 17,
    "tag_id": 19,
    "author": "earum",
    "length": "consequatur"
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
 "message": "Created Pathway Index",
 "current_page": 1,
 "data": [
   {
    "id": 4,
    "name": "Pathway Theme 1",
    "developer_id": 1,
    "author": "Pathway Author Name",
    "thumb": "thumb-file-name.jpg",
    "description": "Description text",
    "like": 100,
    "status": "draft",
    "length_unit": "m",
    "length": 20,
    "offline": false,
    "mood_tracker": false,
    "feedback": false,
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00"
   }
 ],
          'first_page_url',
 "from": 1,
 "last_page": 3,
 "last_page_url": "/3",
 "links": "",
 "next_page_url": "/2",
 "path": "",
 "per_page": 10,
 "prev_page_url": "",
 "to": "",
 "total": 3
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "details": [
            "The details field is required."
        ],
        "details.name": [
            "The name field is required."
        ],
        "details.status": [
            "The status field is required."
        ],
        "details.length_unit": [
            "The length_unit field is required."
        ],
        "details.length": [
            "The length field is required."
        ],
        "details.offline": [
            "The offline field is required."
        ],
        "details.mood_tracker": [
            "The mood_tracker field must be a bool."
        ],
        "details.feedback": [
            "The feedback field must be a bool."
        ],
        "tags": [
            "The tags field must be an array."
        ],
        "categories": [
            "The categories field must be an array."
        ]
    }
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
<div id="execution-results-POSTapi-mobile-v1-completed-pathways" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-mobile-v1-completed-pathways"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-mobile-v1-completed-pathways"></code></pre>
</div>
<div id="execution-error-POSTapi-mobile-v1-completed-pathways" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-mobile-v1-completed-pathways"></code></pre>
</div>
<form id="form-POSTapi-mobile-v1-completed-pathways" data-method="POST" data-path="api/mobile/v1/completed/pathways" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-mobile-v1-completed-pathways', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-mobile-v1-completed-pathways" onclick="tryItOut('POSTapi-mobile-v1-completed-pathways');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-mobile-v1-completed-pathways" onclick="cancelTryOut('POSTapi-mobile-v1-completed-pathways');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-mobile-v1-completed-pathways" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/mobile/v1/completed/pathways</code></b>
</p>
<p>
<label id="auth-POSTapi-mobile-v1-completed-pathways" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-mobile-v1-completed-pathways" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="category_id" data-endpoint="POSTapi-mobile-v1-completed-pathways" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>tag_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tag_id" data-endpoint="POSTapi-mobile-v1-completed-pathways" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>author</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="author" data-endpoint="POSTapi-mobile-v1-completed-pathways" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>length</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="length" data-endpoint="POSTapi-mobile-v1-completed-pathways" data-component="body"  hidden>
<br>
</p>

</form>


## Display a number of the user&#039;s completed pathways.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/mobile/v1/completed/pathways/count" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/mobile/v1/completed/pathways/count"
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
 "message": "Number of Completed Pathways",
 "data": 3
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
<div id="execution-results-GETapi-mobile-v1-completed-pathways-count" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-mobile-v1-completed-pathways-count"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mobile-v1-completed-pathways-count"></code></pre>
</div>
<div id="execution-error-GETapi-mobile-v1-completed-pathways-count" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mobile-v1-completed-pathways-count"></code></pre>
</div>
<form id="form-GETapi-mobile-v1-completed-pathways-count" data-method="GET" data-path="api/mobile/v1/completed/pathways/count" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-mobile-v1-completed-pathways-count', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-mobile-v1-completed-pathways-count" onclick="tryItOut('GETapi-mobile-v1-completed-pathways-count');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-mobile-v1-completed-pathways-count" onclick="cancelTryOut('GETapi-mobile-v1-completed-pathways-count');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-mobile-v1-completed-pathways-count" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/mobile/v1/completed/pathways/count</code></b>
</p>
<p>
<label id="auth-GETapi-mobile-v1-completed-pathways-count" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-mobile-v1-completed-pathways-count" data-component="header"></label>
</p>
</form>


## Complete a pathway.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/mobile/v1/completed/pathways/tempora" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/mobile/v1/completed/pathways/tempora"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Completed Pathway",
    "data": null
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Not found"
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
<div id="execution-results-PUTapi-mobile-v1-completed-pathways--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-mobile-v1-completed-pathways--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-mobile-v1-completed-pathways--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-mobile-v1-completed-pathways--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-mobile-v1-completed-pathways--id-"></code></pre>
</div>
<form id="form-PUTapi-mobile-v1-completed-pathways--id-" data-method="PUT" data-path="api/mobile/v1/completed/pathways/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-mobile-v1-completed-pathways--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-mobile-v1-completed-pathways--id-" onclick="tryItOut('PUTapi-mobile-v1-completed-pathways--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-mobile-v1-completed-pathways--id-" onclick="cancelTryOut('PUTapi-mobile-v1-completed-pathways--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-mobile-v1-completed-pathways--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/mobile/v1/completed/pathways/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-mobile-v1-completed-pathways--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-mobile-v1-completed-pathways--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-mobile-v1-completed-pathways--id-" data-component="url" required  hidden>
<br>
</p>
</form>



