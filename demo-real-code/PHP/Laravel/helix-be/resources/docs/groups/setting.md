# Setting

APIs for managing Setting

## Display a Setting By Key for auth user.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/mobile/v1/settings/key/porro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/mobile/v1/settings/key/porro"
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
 "message": "Got Setting By Key.",
 "data": [
    "id": 1,
    "key": "terms",
    "value": "<p>terms</p>,
    "created_at": "2021-03-09T17:54:59.000000Z",
    "updated_at": "2021-03-09T17:54:59.000000Z",
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
<div id="execution-results-GETapi-mobile-v1-settings-key--key-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-mobile-v1-settings-key--key-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mobile-v1-settings-key--key-"></code></pre>
</div>
<div id="execution-error-GETapi-mobile-v1-settings-key--key-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mobile-v1-settings-key--key-"></code></pre>
</div>
<form id="form-GETapi-mobile-v1-settings-key--key-" data-method="GET" data-path="api/mobile/v1/settings/key/{key}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-mobile-v1-settings-key--key-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-mobile-v1-settings-key--key-" onclick="tryItOut('GETapi-mobile-v1-settings-key--key-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-mobile-v1-settings-key--key-" onclick="cancelTryOut('GETapi-mobile-v1-settings-key--key-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-mobile-v1-settings-key--key-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/mobile/v1/settings/key/{key}</code></b>
</p>
<p>
<label id="auth-GETapi-mobile-v1-settings-key--key-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-mobile-v1-settings-key--key-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>key</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="key" data-endpoint="GETapi-mobile-v1-settings-key--key-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display the List of Settings for auth user.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/settings"
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
 "message": "List of Settings.",
 "data": [
  {
    "id": 1,
    "key": "terms",
    "value": "<p>terms</p>,
    "created_at": "2021-03-09T17:54:59.000000Z",
    "updated_at": "2021-03-09T17:54:59.000000Z",
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
<div id="execution-results-GETapi-cms-v1-settings" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-settings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-settings"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-settings"></code></pre>
</div>
<form id="form-GETapi-cms-v1-settings" data-method="GET" data-path="api/cms/v1/settings" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-settings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-settings" onclick="tryItOut('GETapi-cms-v1-settings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-settings" onclick="cancelTryOut('GETapi-cms-v1-settings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-settings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/settings</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-settings" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-settings" data-component="header"></label>
</p>
</form>


## Display a Setting By Id for auth user.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/settings/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/settings/aut"
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
 "message": "Got Specific Setting.",
 "data": [
    "id": 1,
    "key": "terms",
    "value": "<p>terms</p>,
    "created_at": "2021-03-09T17:54:59.000000Z",
    "updated_at": "2021-03-09T17:54:59.000000Z",
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
<div id="execution-results-GETapi-cms-v1-settings--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-settings--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-settings--id-"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-settings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-settings--id-"></code></pre>
</div>
<form id="form-GETapi-cms-v1-settings--id-" data-method="GET" data-path="api/cms/v1/settings/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-settings--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-settings--id-" onclick="tryItOut('GETapi-cms-v1-settings--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-settings--id-" onclick="cancelTryOut('GETapi-cms-v1-settings--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-settings--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/settings/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-settings--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-settings--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-cms-v1-settings--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Store a newly created Setting

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/cms/v1/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"key":"minima","value":"dolores","setting":{"key":"assumenda","value":"ea"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "key": "minima",
    "value": "dolores",
    "setting": {
        "key": "assumenda",
        "value": "ea"
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
 "message": "Created new Setting.",
 "data": [
    "id": 1,
    "key": "Test",
    "value": "<p>Test</p>,
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
<div id="execution-results-POSTapi-cms-v1-settings" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-cms-v1-settings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cms-v1-settings"></code></pre>
</div>
<div id="execution-error-POSTapi-cms-v1-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cms-v1-settings"></code></pre>
</div>
<form id="form-POSTapi-cms-v1-settings" data-method="POST" data-path="api/cms/v1/settings" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-cms-v1-settings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-cms-v1-settings" onclick="tryItOut('POSTapi-cms-v1-settings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-cms-v1-settings" onclick="cancelTryOut('POSTapi-cms-v1-settings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-cms-v1-settings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/cms/v1/settings</code></b>
</p>
<p>
<label id="auth-POSTapi-cms-v1-settings" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-cms-v1-settings" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>key</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="key" data-endpoint="POSTapi-cms-v1-settings" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="value" data-endpoint="POSTapi-cms-v1-settings" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>setting</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The Setting object</summary>
<br>
<p>
<b><code>setting.key</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="setting.key" data-endpoint="POSTapi-cms-v1-settings" data-component="body" required  hidden>
<br>
The Key of the Setting</p>
<p>
<b><code>setting.value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="setting.value" data-endpoint="POSTapi-cms-v1-settings" data-component="body" required  hidden>
<br>
The Value of the Setting</p>
</details>
</p>

</form>


## Update a newly created Setting

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/cms/v1/settings/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"key":"quod","value":"sit","setting":{"key":"quo","value":"vero"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/settings/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "key": "quod",
    "value": "sit",
    "setting": {
        "key": "quo",
        "value": "vero"
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
 "message": "Updated the Setting Entity.",
 "data": [
    "id": 1,
    "key": "Test",
    "value": "<p>Test</p>,
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
<div id="execution-results-PUTapi-cms-v1-settings--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-cms-v1-settings--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cms-v1-settings--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-cms-v1-settings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cms-v1-settings--id-"></code></pre>
</div>
<form id="form-PUTapi-cms-v1-settings--id-" data-method="PUT" data-path="api/cms/v1/settings/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-cms-v1-settings--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-cms-v1-settings--id-" onclick="tryItOut('PUTapi-cms-v1-settings--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-cms-v1-settings--id-" onclick="cancelTryOut('PUTapi-cms-v1-settings--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-cms-v1-settings--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/cms/v1/settings/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-cms-v1-settings--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-cms-v1-settings--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-cms-v1-settings--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>key</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="key" data-endpoint="PUTapi-cms-v1-settings--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>value</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="value" data-endpoint="PUTapi-cms-v1-settings--id-" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>setting</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The Setting object</summary>
<br>
<p>
<b><code>setting.key</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="setting.key" data-endpoint="PUTapi-cms-v1-settings--id-" data-component="body"  hidden>
<br>
The Key of the Setting</p>
<p>
<b><code>setting.value</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="setting.value" data-endpoint="PUTapi-cms-v1-settings--id-" data-component="body"  hidden>
<br>
The Value of the Setting</p>
</details>
</p>

</form>


## Remove the specified Setting.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/cms/v1/settings/recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/settings/recusandae"
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
 "message": "Deleted The Setting Entity.",
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
<div id="execution-results-DELETEapi-cms-v1-settings--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-cms-v1-settings--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cms-v1-settings--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-cms-v1-settings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cms-v1-settings--id-"></code></pre>
</div>
<form id="form-DELETEapi-cms-v1-settings--id-" data-method="DELETE" data-path="api/cms/v1/settings/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cms-v1-settings--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-cms-v1-settings--id-" onclick="tryItOut('DELETEapi-cms-v1-settings--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-cms-v1-settings--id-" onclick="cancelTryOut('DELETEapi-cms-v1-settings--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-cms-v1-settings--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/cms/v1/settings/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-cms-v1-settings--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-cms-v1-settings--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-cms-v1-settings--id-" data-component="url" required  hidden>
<br>
</p>
</form>



