# Mood Trackers

APIs for managing Mood Trackers

## Display a listing of all Mood Trackers for auth user.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/moodTrackers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackers"
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
    "message": "List of Mood Trackers.",
    "data": [
        {
            "id": 1,
            "user_id": 1,
            "feeling_id": 5,
            "tenant_id": null,
            "created_at": "2021-03-09T17:54:59.000000Z",
            "updated_at": "2021-03-09T17:54:59.000000Z",
            "feeling": {
                "id": 5,
                "name": "awful",
                "mood_state": "negative",
                "path": null
            },
            "activities": [
                {
                    "id": 19,
                    "user_id": null,
                    "name": "shopping",
                    "path": null,
                    "created_at": "2021-03-09T17:54:33.000000Z",
                    "updated_at": "2021-03-09T17:54:33.000000Z",
                    "laravel_through_key": 1
                }
            ]
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
<div id="execution-results-GETapi-v1-moodTrackers" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-moodTrackers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-moodTrackers"></code></pre>
</div>
<div id="execution-error-GETapi-v1-moodTrackers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-moodTrackers"></code></pre>
</div>
<form id="form-GETapi-v1-moodTrackers" data-method="GET" data-path="api/v1/moodTrackers" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-moodTrackers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-moodTrackers" onclick="tryItOut('GETapi-v1-moodTrackers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-moodTrackers" onclick="cancelTryOut('GETapi-v1-moodTrackers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-moodTrackers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/moodTrackers</code></b>
</p>
<p>
<label id="auth-GETapi-v1-moodTrackers" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-moodTrackers" data-component="header"></label>
</p>
</form>


## Display a listing of all Mood Trackers With Statistic for auth user.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/moodTrackers/withStatistics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackers/withStatistics"
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
 "message": "List of Mood Trackers.",
 "data": [
   {
    "id": 1,
    "user_id": 1,
    "feeling_id": 5,
    "tenant_id": null,
    "created_at": "2021-03-09T17:54:59.000000Z",
    "updated_at": "2021-03-09T17:54:59.000000Z",
    "feeling": {
      "id": 5,
      "name": "awful",
      "mood_state": "negative",
      "path": null
     },
    "activities": [
      {
        "id": 19,
        "user_id": null,
        "name": "shopping",
        "path": null,
        "created_at": "2021-03-09T17:54:33.000000Z",
        "updated_at": "2021-03-09T17:54:33.000000Z",
        "laravel_through_key": 1
       }
     ],
    "tracked": 1,
    "positive": 0,
    "negative": 1,
    "neutral": 1,
    "averageFeeling": {
       "id": 3,
       "name": "okay",
       "path": null,
       "mood_state": "neutral"
       "created_at": "2021-04-13T17:38:56.000000Z",
       "updated_at": "2021-04-13T17:38:56.000000Z",
     },
     "averageActivity": {
       "id": 3,
       "name": "okay",
       "path": null,
       "user_id": null
       "created_at": "2021-04-13T17:38:56.000000Z",
       "updated_at": "2021-04-13T17:38:56.000000Z",
     },
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
<div id="execution-results-GETapi-v1-moodTrackers-withStatistics" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-moodTrackers-withStatistics"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-moodTrackers-withStatistics"></code></pre>
</div>
<div id="execution-error-GETapi-v1-moodTrackers-withStatistics" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-moodTrackers-withStatistics"></code></pre>
</div>
<form id="form-GETapi-v1-moodTrackers-withStatistics" data-method="GET" data-path="api/v1/moodTrackers/withStatistics" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-moodTrackers-withStatistics', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-moodTrackers-withStatistics" onclick="tryItOut('GETapi-v1-moodTrackers-withStatistics');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-moodTrackers-withStatistics" onclick="cancelTryOut('GETapi-v1-moodTrackers-withStatistics');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-moodTrackers-withStatistics" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/moodTrackers/withStatistics</code></b>
</p>
<p>
<label id="auth-GETapi-v1-moodTrackers-withStatistics" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-moodTrackers-withStatistics" data-component="header"></label>
</p>
</form>


## Display the specified Mood Tracker.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/moodTrackers/ex?id=7" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackers/ex"
);

let params = {
    "id": "7",
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
    "message": "Got Specific Mood Tracker.",
    "data": {
        "id": 1,
        "user_id": 1,
        "feeling_id": 5,
        "tenant_id": null,
        "created_at": "2021-03-09T17:54:59.000000Z",
        "updated_at": "2021-03-09T17:54:59.000000Z",
        "feeling": {
            "id": 5,
            "name": "awful",
            "mood_state": "negative",
            "path": null
        },
        "activities": [
            {
                "id": 19,
                "user_id": null,
                "name": "shopping",
                "path": null,
                "created_at": "2021-03-09T17:54:33.000000Z",
                "updated_at": "2021-03-09T17:54:33.000000Z",
                "laravel_through_key": 1
            }
        ]
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
<div id="execution-results-GETapi-v1-moodTrackers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-moodTrackers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-moodTrackers--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-moodTrackers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-moodTrackers--id-"></code></pre>
</div>
<form id="form-GETapi-v1-moodTrackers--id-" data-method="GET" data-path="api/v1/moodTrackers/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-moodTrackers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-moodTrackers--id-" onclick="tryItOut('GETapi-v1-moodTrackers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-moodTrackers--id-" onclick="cancelTryOut('GETapi-v1-moodTrackers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-moodTrackers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/moodTrackers/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-moodTrackers--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-moodTrackers--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-moodTrackers--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-moodTrackers--id-" data-component="query"  hidden>
<br>
Mood Tracker ID</p>
</form>


## Store a newly created Mood Tracker

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/moodTrackers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"activity_id":[2,19],"feeling_id":2,"tenant_id":10,"moodTracker":{"activity_id":13,"feeling_id":10,"tenant_id":17}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "activity_id": [
        2,
        19
    ],
    "feeling_id": 2,
    "tenant_id": 10,
    "moodTracker": {
        "activity_id": 13,
        "feeling_id": 10,
        "tenant_id": 17
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
 "message": "Created new Mood Tracker.",
 "data": [
    "id": 1,
    "user_id": 1,
    "feeling_id": 5,
    "tenant_id": null,
    "created_at": "2021-03-09T17:54:59.000000Z",
    "updated_at": "2021-03-09T17:54:59.000000Z",
    "feeling": {
      "id": 5,
      "name": "awful",
      "mood_state": "negative",
      "path": null
     },
    "activities": [
      {
        "id": 19,
        "user_id": null,
        "name": "shopping",
        "path": null,
        "created_at": "2021-03-09T17:54:33.000000Z",
        "updated_at": "2021-03-09T17:54:33.000000Z",
        "laravel_through_key": 1
       }
    ]
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "feeling_id":["The feeling id field is required."],
  "tenant_id":["The tenant id must be an integer"],
  "activity_id":["The activity id must be an array."],
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
<div id="execution-results-POSTapi-v1-moodTrackers" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-moodTrackers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-moodTrackers"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-moodTrackers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-moodTrackers"></code></pre>
</div>
<form id="form-POSTapi-v1-moodTrackers" data-method="POST" data-path="api/v1/moodTrackers" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-moodTrackers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-moodTrackers" onclick="tryItOut('POSTapi-v1-moodTrackers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-moodTrackers" onclick="cancelTryOut('POSTapi-v1-moodTrackers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-moodTrackers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/moodTrackers</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-moodTrackers" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-moodTrackers" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>activity_id</code></b>&nbsp;&nbsp;<small>integer[]</small>  &nbsp;
<input type="number" name="activity_id.0" data-endpoint="POSTapi-v1-moodTrackers" data-component="body" required  hidden>
<input type="number" name="activity_id.1" data-endpoint="POSTapi-v1-moodTrackers" data-component="body" hidden>
<br>
</p>
<p>
<b><code>feeling_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="feeling_id" data-endpoint="POSTapi-v1-moodTrackers" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tenant_id" data-endpoint="POSTapi-v1-moodTrackers" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>moodTracker</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The Mood Tracker object</summary>
<br>
<p>
<b><code>moodTracker.activity_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="moodTracker.activity_id" data-endpoint="POSTapi-v1-moodTrackers" data-component="body" required  hidden>
<br>
The Mood Tracker Activity array of activities ids</p>
<p>
<b><code>moodTracker.feeling_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="moodTracker.feeling_id" data-endpoint="POSTapi-v1-moodTrackers" data-component="body" required  hidden>
<br>
The Mood Tracker Feeling id</p>
<p>
<b><code>moodTracker.tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="moodTracker.tenant_id" data-endpoint="POSTapi-v1-moodTrackers" data-component="body"  hidden>
<br>
The Tenant id</p>
</details>
</p>

</form>


## Update the specified Mood Tracker

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/moodTrackers/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"feeling_id":8,"activity_id":[19,14],"tenant_id":4,"moodTracker":{"activity_id":"et","feeling_id":7,"tenant_id":10}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackers/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "feeling_id": 8,
    "activity_id": [
        19,
        14
    ],
    "tenant_id": 4,
    "moodTracker": {
        "activity_id": "et",
        "feeling_id": 7,
        "tenant_id": 10
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
 "message": "Updated the Mood Tracker.",
 "data": [
    "id": 1,
    "user_id": 1,
    "feeling_id": 5,
    "tenant_id": null,
    "created_at": "2021-03-09T17:54:59.000000Z",
    "updated_at": "2021-03-09T17:54:59.000000Z",
    "feeling": {
      "id": 5,
      "name": "awful",
      "mood_state": "negative",
      "path": null
     },
    "activities": [
      {
        "id": 19,
        "user_id": null,
        "name": "shopping",
        "path": null,
        "created_at": "2021-03-09T17:54:33.000000Z",
        "updated_at": "2021-03-09T17:54:33.000000Z",
        "laravel_through_key": 1
       }
    ]
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "feeling_id":["The feeling id must be an integer"],
  "tenant_id":["The tenant id must be an integer"],
  "activity_id":["The activity id must be an array."],
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
<div id="execution-results-PUTapi-v1-moodTrackers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-moodTrackers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-moodTrackers--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-moodTrackers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-moodTrackers--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-moodTrackers--id-" data-method="PUT" data-path="api/v1/moodTrackers/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-moodTrackers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-moodTrackers--id-" onclick="tryItOut('PUTapi-v1-moodTrackers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-moodTrackers--id-" onclick="cancelTryOut('PUTapi-v1-moodTrackers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-moodTrackers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/moodTrackers/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-moodTrackers--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-moodTrackers--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-moodTrackers--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>feeling_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="feeling_id" data-endpoint="PUTapi-v1-moodTrackers--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>activity_id</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="activity_id.0" data-endpoint="PUTapi-v1-moodTrackers--id-" data-component="body"  hidden>
<input type="number" name="activity_id.1" data-endpoint="PUTapi-v1-moodTrackers--id-" data-component="body" hidden>
<br>
</p>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tenant_id" data-endpoint="PUTapi-v1-moodTrackers--id-" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>moodTracker</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The Mood Tracker object</summary>
<br>
<p>
<b><code>moodTracker.activity_id</code></b>&nbsp;&nbsp;<small>array</small>     <i>optional</i> &nbsp;
<input type="text" name="moodTracker.activity_id" data-endpoint="PUTapi-v1-moodTrackers--id-" data-component="body"  hidden>
<br>
The Mood Tracker Activity array of activities ids</p>
<p>
<b><code>moodTracker.feeling_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="moodTracker.feeling_id" data-endpoint="PUTapi-v1-moodTrackers--id-" data-component="body"  hidden>
<br>
The Mood Tracker Feeling id</p>
<p>
<b><code>moodTracker.tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="moodTracker.tenant_id" data-endpoint="PUTapi-v1-moodTrackers--id-" data-component="body"  hidden>
<br>
The Tenant id</p>
</details>
</p>

</form>


## Remove the specified Mood Tracker.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/moodTrackers/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackers/quia"
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
 "message": "Deleted The Mood Tracker.",
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
<div id="execution-results-DELETEapi-v1-moodTrackers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-moodTrackers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-moodTrackers--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-moodTrackers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-moodTrackers--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-moodTrackers--id-" data-method="DELETE" data-path="api/v1/moodTrackers/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-moodTrackers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-moodTrackers--id-" onclick="tryItOut('DELETEapi-v1-moodTrackers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-moodTrackers--id-" onclick="cancelTryOut('DELETEapi-v1-moodTrackers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-moodTrackers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/moodTrackers/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-moodTrackers--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-moodTrackers--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-moodTrackers--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display the specified Mood Tracker Setting.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/moodTrackerSettings/tenant/nobis?tenant_id=13" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackerSettings/tenant/nobis"
);

let params = {
    "tenant_id": "13",
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
 "message": "Got Specific Mood Tracker Setting.",
 "data":
    {
      "id": 1,
      "company_id": 1,
      "button_cta": "Text for button",
      "created_at": "2021-03-09T17:54:59.000000Z",
      "updated_at": "2021-03-09T17:54:59.000000Z",
      "feelings": [
        {
          "id": 5,
          "name": "awful",
        }
       ],
       "activities": [
         {
           "id": 19,
           "name": "shopping",
         }
       ]
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
<div id="execution-results-GETapi-v1-moodTrackerSettings-tenant--tenant_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-moodTrackerSettings-tenant--tenant_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-moodTrackerSettings-tenant--tenant_id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-moodTrackerSettings-tenant--tenant_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-moodTrackerSettings-tenant--tenant_id-"></code></pre>
</div>
<form id="form-GETapi-v1-moodTrackerSettings-tenant--tenant_id-" data-method="GET" data-path="api/v1/moodTrackerSettings/tenant/{tenant_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-moodTrackerSettings-tenant--tenant_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-moodTrackerSettings-tenant--tenant_id-" onclick="tryItOut('GETapi-v1-moodTrackerSettings-tenant--tenant_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-moodTrackerSettings-tenant--tenant_id-" onclick="cancelTryOut('GETapi-v1-moodTrackerSettings-tenant--tenant_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-moodTrackerSettings-tenant--tenant_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/moodTrackerSettings/tenant/{tenant_id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-moodTrackerSettings-tenant--tenant_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-moodTrackerSettings-tenant--tenant_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tenant_id" data-endpoint="GETapi-v1-moodTrackerSettings-tenant--tenant_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tenant_id" data-endpoint="GETapi-v1-moodTrackerSettings-tenant--tenant_id-" data-component="query"  hidden>
<br>
Tenant ID</p>
</form>


## Store a newly created Mood Tracker Settings

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/moodTrackerSettings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"button_cta":"perspiciatis","feelings":[14,1],"activities":[3,11],"moodTrackerSetting":[]}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackerSettings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "button_cta": "perspiciatis",
    "feelings": [
        14,
        1
    ],
    "activities": [
        3,
        11
    ],
    "moodTrackerSetting": []
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
 "message": "Created new Mood Tracker Setting.",
 "data":
    {
      "id": 1,
      "company_id": 1,
      "button_cta": "Text for button",
      "created_at": "2021-03-09T17:54:59.000000Z",
      "updated_at": "2021-03-09T17:54:59.000000Z",
      "feelings": [
        {
          "id": 5,
          "name": "awful",
        }
       ],
       "activities": [
         {
           "id": 19,
           "name": "shopping",
         }
       ]
    }
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "feelings":["The feelings field is required."],
  "activities":["The activities must be an array"],
  "button_cta":["The button_cta id must be a string."],
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
<div id="execution-results-POSTapi-v1-moodTrackerSettings" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-moodTrackerSettings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-moodTrackerSettings"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-moodTrackerSettings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-moodTrackerSettings"></code></pre>
</div>
<form id="form-POSTapi-v1-moodTrackerSettings" data-method="POST" data-path="api/v1/moodTrackerSettings" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-moodTrackerSettings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-moodTrackerSettings" onclick="tryItOut('POSTapi-v1-moodTrackerSettings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-moodTrackerSettings" onclick="cancelTryOut('POSTapi-v1-moodTrackerSettings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-moodTrackerSettings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/moodTrackerSettings</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-moodTrackerSettings" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-moodTrackerSettings" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>button_cta</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_cta" data-endpoint="POSTapi-v1-moodTrackerSettings" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>feelings</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="feelings.0" data-endpoint="POSTapi-v1-moodTrackerSettings" data-component="body"  hidden>
<input type="number" name="feelings.1" data-endpoint="POSTapi-v1-moodTrackerSettings" data-component="body" hidden>
<br>
</p>
<p>
<b><code>activities</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="activities.0" data-endpoint="POSTapi-v1-moodTrackerSettings" data-component="body"  hidden>
<input type="number" name="activities.1" data-endpoint="POSTapi-v1-moodTrackerSettings" data-component="body" hidden>
<br>
</p>
<p>
<b><code>moodTrackerSetting</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<input type="text" name="moodTrackerSetting" data-endpoint="POSTapi-v1-moodTrackerSettings" data-component="body" required  hidden>
<br>
The Mood Tracker Settings object</p>
<p>
<details>
<summary>
<b><code>moodTracker</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>
</summary>
<br>
<p>
<b><code>moodTracker.button_cta</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="moodTracker.button_cta" data-endpoint="POSTapi-v1-moodTrackerSettings" data-component="body" required  hidden>
<br>
The Button CTA for Mood Tracker Settings</p>
<p>
<b><code>moodTracker.feelings</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="moodTracker.feelings" data-endpoint="POSTapi-v1-moodTrackerSettings" data-component="body" required  hidden>
<br>
The feeling array of Mood Tracker Feelings ids</p>
<p>
<b><code>moodTracker.activities</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="moodTracker.activities" data-endpoint="POSTapi-v1-moodTrackerSettings" data-component="body" required  hidden>
<br>
The activity array of Mood Tracker Activities ids</p>
</details>
</p>

</form>


## Update the specified Mood Tracker Setting

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/moodTrackerSettings/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"button_cta":"maiores","feelings":[10,17],"activities":[15,12],"moodTrackerSetting":[]}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackerSettings/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "button_cta": "maiores",
    "feelings": [
        10,
        17
    ],
    "activities": [
        15,
        12
    ],
    "moodTrackerSetting": []
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
 "message": "Updated the Mood Tracker Setting.",
 "data":
    {
      "id": 1,
      "company_id": 1,
      "button_cta": "Text for button",
      "created_at": "2021-03-09T17:54:59.000000Z",
      "updated_at": "2021-03-09T17:54:59.000000Z",
      "feelings": [
        {
          "id": 5,
          "name": "awful",
        }
       ],
       "activities": [
         {
           "id": 19,
           "name": "shopping",
         }
       ]
    }
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "feelings":["The feelings field must be an array."],
  "activities":["The activities field must be an array."],
  "button_cta":["The button_cta field must be a string."],
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
<div id="execution-results-PUTapi-v1-moodTrackerSettings--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-moodTrackerSettings--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-moodTrackerSettings--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-moodTrackerSettings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-moodTrackerSettings--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-moodTrackerSettings--id-" data-method="PUT" data-path="api/v1/moodTrackerSettings/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-moodTrackerSettings--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-moodTrackerSettings--id-" onclick="tryItOut('PUTapi-v1-moodTrackerSettings--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-moodTrackerSettings--id-" onclick="cancelTryOut('PUTapi-v1-moodTrackerSettings--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-moodTrackerSettings--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/moodTrackerSettings/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-moodTrackerSettings--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-moodTrackerSettings--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-moodTrackerSettings--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>button_cta</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="button_cta" data-endpoint="PUTapi-v1-moodTrackerSettings--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>feelings</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="feelings.0" data-endpoint="PUTapi-v1-moodTrackerSettings--id-" data-component="body"  hidden>
<input type="number" name="feelings.1" data-endpoint="PUTapi-v1-moodTrackerSettings--id-" data-component="body" hidden>
<br>
</p>
<p>
<b><code>activities</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="activities.0" data-endpoint="PUTapi-v1-moodTrackerSettings--id-" data-component="body"  hidden>
<input type="number" name="activities.1" data-endpoint="PUTapi-v1-moodTrackerSettings--id-" data-component="body" hidden>
<br>
</p>
<p>
<b><code>moodTrackerSetting</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<input type="text" name="moodTrackerSetting" data-endpoint="PUTapi-v1-moodTrackerSettings--id-" data-component="body" required  hidden>
<br>
The Mood Tracker Settings object</p>
<p>
<details>
<summary>
<b><code>moodTracker</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>
</summary>
<br>
<p>
<b><code>moodTracker.button_cta</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="moodTracker.button_cta" data-endpoint="PUTapi-v1-moodTrackerSettings--id-" data-component="body"  hidden>
<br>
The Button CTA for Mood Tracker Settings</p>
<p>
<b><code>moodTracker.feelings</code></b>&nbsp;&nbsp;<small>array</small>     <i>optional</i> &nbsp;
<input type="text" name="moodTracker.feelings" data-endpoint="PUTapi-v1-moodTrackerSettings--id-" data-component="body"  hidden>
<br>
The feeling array of Mood Tracker Feelings ids</p>
<p>
<b><code>moodTracker.activities</code></b>&nbsp;&nbsp;<small>array</small>     <i>optional</i> &nbsp;
<input type="text" name="moodTracker.activities" data-endpoint="PUTapi-v1-moodTrackerSettings--id-" data-component="body"  hidden>
<br>
The activity array of Mood Tracker Activities ids</p>
</details>
</p>

</form>


## Remove the specified Mood Tracker Setting.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/moodTrackerSettings/dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackerSettings/dolores"
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
 "message": "Deleted The Mood Tracker Setting.",
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
<div id="execution-results-DELETEapi-v1-moodTrackerSettings--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-moodTrackerSettings--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-moodTrackerSettings--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-moodTrackerSettings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-moodTrackerSettings--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-moodTrackerSettings--id-" data-method="DELETE" data-path="api/v1/moodTrackerSettings/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-moodTrackerSettings--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-moodTrackerSettings--id-" onclick="tryItOut('DELETEapi-v1-moodTrackerSettings--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-moodTrackerSettings--id-" onclick="cancelTryOut('DELETEapi-v1-moodTrackerSettings--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-moodTrackerSettings--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/moodTrackerSettings/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-moodTrackerSettings--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-moodTrackerSettings--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-moodTrackerSettings--id-" data-component="url" required  hidden>
<br>
</p>
</form>



