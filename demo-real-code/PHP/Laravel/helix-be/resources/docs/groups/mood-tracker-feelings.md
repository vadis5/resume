# Mood Tracker Feelings

APIs for managing Mood Tracker Feelings

## Display a listing of all Mood Trackers Feelings for auth user.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/moodTrackerFeelings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackerFeelings"
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
 "message": "List of Mood Tracker Feelings.",
 "data": [
   {
     "id": 1,
     "user_id": null,
     "name": "amazing",
     "path": null,
     "mood_state": "positive",
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
<div id="execution-results-GETapi-v1-moodTrackerFeelings" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-moodTrackerFeelings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-moodTrackerFeelings"></code></pre>
</div>
<div id="execution-error-GETapi-v1-moodTrackerFeelings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-moodTrackerFeelings"></code></pre>
</div>
<form id="form-GETapi-v1-moodTrackerFeelings" data-method="GET" data-path="api/v1/moodTrackerFeelings" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-moodTrackerFeelings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-moodTrackerFeelings" onclick="tryItOut('GETapi-v1-moodTrackerFeelings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-moodTrackerFeelings" onclick="cancelTryOut('GETapi-v1-moodTrackerFeelings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-moodTrackerFeelings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/moodTrackerFeelings</code></b>
</p>
<p>
<label id="auth-GETapi-v1-moodTrackerFeelings" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-moodTrackerFeelings" data-component="header"></label>
</p>
</form>


## Display a listing of Mood Trackers Feelings depend on Mood Tracker Settings for auth user.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/moodTrackerFeelings/getList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/moodTrackerFeelings/getList"
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
 "message": "List of Mood Tracker Feelings.",
 "data": [
   {
     "id": 1,
     "user_id": null,
     "name": "amazing",
     "path": null,
     "mood_state": "positive",
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
<div id="execution-results-GETapi-v1-moodTrackerFeelings-getList" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-moodTrackerFeelings-getList"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-moodTrackerFeelings-getList"></code></pre>
</div>
<div id="execution-error-GETapi-v1-moodTrackerFeelings-getList" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-moodTrackerFeelings-getList"></code></pre>
</div>
<form id="form-GETapi-v1-moodTrackerFeelings-getList" data-method="GET" data-path="api/v1/moodTrackerFeelings/getList" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-moodTrackerFeelings-getList', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-moodTrackerFeelings-getList" onclick="tryItOut('GETapi-v1-moodTrackerFeelings-getList');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-moodTrackerFeelings-getList" onclick="cancelTryOut('GETapi-v1-moodTrackerFeelings-getList');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-moodTrackerFeelings-getList" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/moodTrackerFeelings/getList</code></b>
</p>
<p>
<label id="auth-GETapi-v1-moodTrackerFeelings-getList" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-moodTrackerFeelings-getList" data-component="header"></label>
</p>
</form>



