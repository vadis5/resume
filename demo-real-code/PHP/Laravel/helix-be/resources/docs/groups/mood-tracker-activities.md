# Mood Tracker Activities

APIs for managing Mood Tracker Activities

## Display a listing of all Mood Trackers Activities for auth user.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/moodTrackerActivities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackerActivities"
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
 "message": "List of Mood Tracker Activities.",
 "data": [
   {
     "id": 1,
     "user_id": null,
     "name": "working",
     "path": null,
     "created_at": "2021-03-09T20:46:32.000000Z",
     "updated_at": "2021-03-09T20:46:32.000000Z"
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
<div id="execution-results-GETapi-v1-moodTrackerActivities" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-moodTrackerActivities"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-moodTrackerActivities"></code></pre>
</div>
<div id="execution-error-GETapi-v1-moodTrackerActivities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-moodTrackerActivities"></code></pre>
</div>
<form id="form-GETapi-v1-moodTrackerActivities" data-method="GET" data-path="api/v1/moodTrackerActivities" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-moodTrackerActivities', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-moodTrackerActivities" onclick="tryItOut('GETapi-v1-moodTrackerActivities');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-moodTrackerActivities" onclick="cancelTryOut('GETapi-v1-moodTrackerActivities');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-moodTrackerActivities" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/moodTrackerActivities</code></b>
</p>
<p>
<label id="auth-GETapi-v1-moodTrackerActivities" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-moodTrackerActivities" data-component="header"></label>
</p>
</form>


## Store a newly created Mood Tracker Activity

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/moodTrackerActivities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"sequi","path":"omnis","moodTrackerActivity":{"name":"id","path":"quos"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackerActivities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "sequi",
    "path": "omnis",
    "moodTrackerActivity": {
        "name": "id",
        "path": "quos"
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
 "message": "Created new Mood Tracker Activity.",
 "data": [
   "user_id": 1,
   "name": "Testing",
   "path": null,
   "updated_at": "2021-03-09T21:03:23.000000Z",
   "created_at": "2021-03-09T21:03:23.000000Z",
   "id": 27
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "name":["The name field is required."],
  "path":["The path field must be a string"],
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
<div id="execution-results-POSTapi-v1-moodTrackerActivities" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-moodTrackerActivities"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-moodTrackerActivities"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-moodTrackerActivities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-moodTrackerActivities"></code></pre>
</div>
<form id="form-POSTapi-v1-moodTrackerActivities" data-method="POST" data-path="api/v1/moodTrackerActivities" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-moodTrackerActivities', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-moodTrackerActivities" onclick="tryItOut('POSTapi-v1-moodTrackerActivities');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-moodTrackerActivities" onclick="cancelTryOut('POSTapi-v1-moodTrackerActivities');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-moodTrackerActivities" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/moodTrackerActivities</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-moodTrackerActivities" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-moodTrackerActivities" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-moodTrackerActivities" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="path" data-endpoint="POSTapi-v1-moodTrackerActivities" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>moodTrackerActivity</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The Mood Tracker Activity object</summary>
<br>
<p>
<b><code>moodTrackerActivity.name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="moodTrackerActivity.name" data-endpoint="POSTapi-v1-moodTrackerActivities" data-component="body" required  hidden>
<br>
The Mood Tracker Activity name</p>
<p>
<b><code>moodTrackerActivity.path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="moodTrackerActivity.path" data-endpoint="POSTapi-v1-moodTrackerActivities" data-component="body"  hidden>
<br>
The Mood Tracker Activity path</p>
</details>
</p>

</form>


## Display a listing of all Mood Trackers Activities depend on mood tracker settings for auth user.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/moodTrackerActivities/getList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackerActivities/getList"
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
 "message": "List of Mood Tracker Activities.",
 "data": [
   {
     "id": 1,
     "user_id": null,
     "name": "working",
     "path": null,
     "created_at": "2021-03-09T20:46:32.000000Z",
     "updated_at": "2021-03-09T20:46:32.000000Z"
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
<div id="execution-results-GETapi-v1-moodTrackerActivities-getList" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-moodTrackerActivities-getList"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-moodTrackerActivities-getList"></code></pre>
</div>
<div id="execution-error-GETapi-v1-moodTrackerActivities-getList" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-moodTrackerActivities-getList"></code></pre>
</div>
<form id="form-GETapi-v1-moodTrackerActivities-getList" data-method="GET" data-path="api/v1/moodTrackerActivities/getList" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-moodTrackerActivities-getList', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-moodTrackerActivities-getList" onclick="tryItOut('GETapi-v1-moodTrackerActivities-getList');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-moodTrackerActivities-getList" onclick="cancelTryOut('GETapi-v1-moodTrackerActivities-getList');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-moodTrackerActivities-getList" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/moodTrackerActivities/getList</code></b>
</p>
<p>
<label id="auth-GETapi-v1-moodTrackerActivities-getList" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-moodTrackerActivities-getList" data-component="header"></label>
</p>
</form>



